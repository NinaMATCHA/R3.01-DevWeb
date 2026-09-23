<?php

namespace modules\models;
class Inscription_model {
    public function __construct(private \Includes\Database\DatabaseConnection $connection) {}

    public function getInscription() : void
    {
        if (!$statement = $this->connection->getConnection()->query('INSERT INTO users (login, password) VALUES ($login, $password);'))
        {
            throw new DatabaseException();
        }
    }
}