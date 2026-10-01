<?php

namespace modules\models;

use _assets\includes\DatabaseConnection;
use Exception;
class signup_model {
    public function __construct(private DatabaseConnection $connection) {}

    public function getInscription(String $_login, $_password) : void
    {
        $passwordHash = password_hash($_password, PASSWORD_DEFAULT);
        $statement = $this->connection->getConnection()->prepare("INSERT INTO users (login, password, reset_code, expiration_date) VALUES (:login, :password, NULL, NULL);");
            if (!$statement->execute([':login' => $_login, ':password' => $passwordHash])) {
                throw new Exception('Le mot de passe ou le login est incorrects');
        }
    }
}

?>