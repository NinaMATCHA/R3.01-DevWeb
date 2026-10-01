<?php
namespace modules\models; 
use PDO;
use _assets\includes\DatabaseConnection;


class forgot_password_model {



    public function __construct(private DatabaseConnection $connection){}

    //Fonction pour sauvegarder le token (une suite de caractere qui se met dans l'URL) a usage unique.
    private function saveTokenInDataBase(string $email, string $token): bool 
    {
       $sql = "UPDATE users SET reset_code = :token WHERE email = :email";
        $statement = $this->connection->getConnection()->prepare($sql);

        if (!$statement->execute([':token' => $token, ':email' => $email])) {
            throw new DatabaseException();
        }

        return $statement->rowCount() > 0;
    }



    //Fonction qui envoie le lien avec token par mail pour reset le mdp
    public function sendMail(string $to): bool
    {
    $token = bin2hex(random_bytes(32));

    if(!$this->saveTokenInDataBase($to, $token)){
        return false;
    }


    $subject = 'Réinitialisez votre mot de passe';


    // Attention, le lien va peut-etre devoir etre changé, le but est de créer un lien unique pour changer de mdp   
    $link = 'https://ninamc.alwaysdata.net/index.php?action=mdpOublie&token=' . $token;
    $message = "Bonjour,\n\n voici votre lien de récupération de mot de passe : \n".$link;

    // En-têtes obligatoires / recommandés
    $headers = [
        'From' => 'no-reply@ninamc.alwaysdata.net',
        'Reply-To' => 'no-reply@ninamc.alwaysdata.net',
        'Content-Type' => 'text/plain; charset=utf-8',
        'X-Mailer' => 'PHP/' . phpversion()
    ];

    // Envoi
    return mail($to, $subject, $message, $headers);
}


//Verif la validité du token et change le mdp
    public function verifyTokenAndChangePassword(string $token, string $newPassword):bool{
    // recherche de l'utilisateur associé au token dans la BDD
        $sql = "SELECT id FROM users WHERE reset_code = :token AND reset_code IS NOT NULL";
        $statement = $this->connection->getConnection()->prepare($sql);
        
        if (!$statement->execute([':token' => $token])) {
            throw new DatabaseException();
        }


        if($user = $statement->fetch(PDO::FETCH_OBJ)){
            //Hashage du mdp
            $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

            //mtn on fait la maj de la bdd et on détruit le token
            $updateSql = "UPDATE users SET password = :password, reset_code = NULL WHERE id = :id";
            $updateStmt = $this->connection->getConnection()->prepare($updateSql);

            if (!$updateStmt->execute([':password' => $passwordHash, ':id' => $user->id])) {
                throw new DatabaseException();
            }

            return true;
        }
        return false;
    }


}