<?php

namespace modules\models;
use Exception;
use PDO;

use _assets\includes\DatabaseConnection;

class login_model {

    #appelle le construct du DatabaseConnection.php et recupere ses id de connection pour pouvoir faire une query
    public function __construct(private DatabaseConnection $connection) {}

    #retourne les resultats que l'on veut de notre query ( je verrai plus tard mais faudra comparer les login avc WHERE )
    public function getConnection(String $_login, $_password): ?array
    {

        $passwordHash = password_hash($_password, PASSWORD_DEFAULT);
        $statement = $this->connection->getConnection()->prepare('SELECT id, login, password FROM users WHERE login = :login LIMIT 1;');

        if (!$statement->execute([':login' => $_login])) {
            //throw new Exception('Le login est incorrect');
            return null;
        }

        $connection = $statement->fetch(PDO::FETCH_OBJ);
        if (!$connection || !password_verify($_password, $connection->password)) {
            //throw new Exception('Le mot de passe est incorrect');
            return null;
        }

        return [$connection];
    }
}

?>