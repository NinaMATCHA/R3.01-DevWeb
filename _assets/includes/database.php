<?php

class DatabaseConnection
{
    private ?PDO $connection = null; # connection prsk on appelle getConnection dans le cours : c'est ce qui contient les param de la pdo
    private static ?DatabaseConnection $instance = null; # instance prsk on appelle getInstance aussi : ça permet de rester sur la meme session

    private function __construct()
    {
        try { # ça c comme dans le cours, hesitez pas a vous co avec les id pour voir la bdd
            $dsn = 'mysql:host=mysql-ninamc.alwaysdata.net;dbname=ninamc_bdd';
            $this->connection = new PDO($dsn, 'ninamc', 'NevotLe+Fortdu13');
            $this->connection->exec('SET CHARACTER SET utf8');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }

    #vérifie si l'instance ( donc l'objet et la connexion en cours ) est null pour en creer une auto dans le controller soit renvoyer celle courante
    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    #renvoie juste la co courante qui peut etre nulle sans __construct
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}