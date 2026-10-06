<?php

/* ref */

namespace modules\models;

use _assets\includes\DatabaseConnection;
use Exception;
use includes\Exception_database_controller;


/**
 * Modèle gérant la persistance des données d'inscription en base de données.
 */

class  signup_model {

    /**
     * Initialise le modèle avec la connexion à la base de données.
     *
     * @param DatabaseConnection $connection Instance de connexion PDO encapsulée.
     */

    public function __construct(private DatabaseConnection $connection) {}



    /**
     * Crée un nouvel utilisateur en BDD après hachage de son mot de passe.
     *
     * @param string $_login Adresse email ou identifiant de l'utilisateur.
     * @param string $_password Mot de passe en clair à hacher.
     * 
     * @throws Exception Si la requête d'insertion échoue.
     * @return void
     */
    public function getInscription(string $_login,string $_password) : void
    {
        $passwordHash = password_hash($_password, PASSWORD_DEFAULT);
        $statement = $this->connection->getConnection()->prepare("INSERT INTO users (login, password, reset_code, expiration_date) VALUES (:login, :password, NULL, NULL);");
            if (!$statement->execute([':login' => $_login, ':password' => $passwordHash])) {
                throw new Exception_database_controller('Le mot de passe ou le login est incorrects');
            }
    }
}

?>