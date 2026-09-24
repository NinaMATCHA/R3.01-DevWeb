<?php

namespace modules\models;

use _assets\includes\DatabaseConnection;
class Inscription_model {
    public function __construct(private DatabaseConnection $connection) {}

    public function getInscription(string $_login, $_password) : void
    {
        if (!$statement = $this->connection->getConnection()->query('INSERT INTO users ($_login, $_password) VALUES ($login, $password);'))
        {
            throw new DatabaseException();
        }
    }
}

?>