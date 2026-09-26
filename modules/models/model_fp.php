<?php
namespace modules\models; 
use PDO;
class forgot_password_model {

    //Fonction pour sauvegarder le code a usage unique.
    private function saveCodeInDataBase(string $email, string $code): bool 
    {
        $pdo = \DatabaseConnection::getInstance()->getConnection();
        $sql = "UPDATE users SET reset_code = :code WHERE email = :email";
        $stmt = $pdo->prepare($sql);

        return $stmt -> execute([
            ':code'=>$code,
            ':email'=>$email
        ]);
    }

    public function sendMail(string $to): bool
    {
    $code = (string) random_int(100000, 999999);
    
    //on verif si y'a pas de probleme pour eviter d'enregistrer des données non valides dans la BDD (genre mail manquant ou faux)
    if (!$this -> saveCodeInDataBase($to, $code)){
        return false;
    }


    $subject = 'Code de récupération de mot de passe';
    $message = "Bonjour, voici votre code de récupération de mot de passe" . $code;

    // En-têtes obligatoires / recommandés
    $headers = [
        'From' => 'expediteur@ton-domaine.com',
        'Reply-To' => 'expediteur@ton-domaine.com',
        'Content-Type' => 'text/plain; charset=utf-8',
        'X-Mailer' => 'PHP/' . phpversion()
    ];

    // Envoi
    return mail($to, $subject, $message, $headers);
}

    public function verifyCode(string $email, string $code, string $newPassWord){
        $pdo = \DatabaseConnection::getInstance()->getConnection();
        $sql = "SELECT id FROM users WHERE email = :email AND reset_code = :code";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute([':email' => $email, ':code' => $code]);

        if ($stmt ->fetch()){
            $passwordHash = password_hash($newPassWord, PASSWORD_DEFAULT);
            $updateSql = "UPDATE users SET mdp = :mdp, reset_code = NULL WHERE email = :email";
            $updateStmt = $pdo -> prepare($updateSql);

            return $updateStmt -> execute([':mdp' => $passwordHash,':email' => $email]);
        }
        return false;
    }


}