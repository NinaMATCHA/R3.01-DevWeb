<?php

namespace modules\models;
class Connection_model {
    #appelle le construct du database.php et recupere ses id de connection pour pouvoir faire une query
    public function __construct(private \Includes\Database\DatabaseConnection $connection) {}

    #retourne les resultats que l'on veut de notre query ( je verrai plus tard mais faudra comparer les login avc WHERE )
    public function getConnection(String $login): array
    {
        if (!$statement = $this->connection->getConnection()->query('SELECT login, password FROM users'))#<-- query ici [a changer c une base]
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
