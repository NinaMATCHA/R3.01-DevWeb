<?php

namespace modules\models;
use PDO;

use _assets\includes\DatabaseConnection;

class login_model {
    #appelle le construct du DatabaseConnection.php et recupere ses id de connection pour pouvoir faire une query
    public function __construct(private DatabaseConnection $connection) {}

    #retourne les resultats que l'on veut de notre query ( je verrai plus tard mais faudra comparer les login avc WHERE )
    public function getConnection(String $_login, $_password): array
    {
        if (!$statement = $this->connection->getConnection()->query("SELECT login, password FROM users WHERE login = '$_login' AND password = '$_password';"))#<-- query ici [a changer c une base]
        {
            throw new DatabaseException();
        }
        $connection = [];
        # ici ce qu'on veut faire avec ce que retourne notre query
        while ($row = $statement->fetch(PDO::FETCH_OBJ)) { #fetch envoie false quand y'a plus r a envoyer
            $connection[] = $row;
        }
        return $connection;
    }
}

?>
