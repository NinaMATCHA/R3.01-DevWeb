<?php

namespace modules\models;

use _assets\includes\DatabaseConnection;
class signup_model {
    public function __construct(private DatabaseConnection $connection) {}

    public function getInscription(String $_login, $_password) : void
    {

        $statement = $this->connection->getConnection()->prepare("INSERT INTO users (login, password) VALUES (:login, :password);");
            if (!$statement->execute([':login' => $_login, ':password' => $_password])) {
                throw new Exception('Le mot de passe ou le login est incorrects');
        }
    }
}

?>