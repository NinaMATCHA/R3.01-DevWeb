<?php

namespace modules\models;

use _assets\includes\DatabaseConnection;
class signup_model {
    public function __construct(private DatabaseConnection $connection) {}

    public function getInscription(String $_login, $_password) : void
    {
        if (!$statement = $this->connection->getConnection()->query("INSERT INTO users (login, password) VALUES ('$_login', '$_password');"))
        {
            throw new DatabaseException();
        }
    }
}

?>