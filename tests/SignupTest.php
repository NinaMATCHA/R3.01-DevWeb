<?php

use PHPUnit\Framework\TestCase;
use modules\models\signup_model;
use _assets\includes\DatabaseConnection;

class SignupTest extends TestCase
{
    public function test_inscription_reussie(): void
    {
        $pdo = new \PDO('sqlite::memory:');
        $pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, login TEXT UNIQUE, password TEXT, reset_code TEXT, expiration_date TEXT)");

        $dbConnStub = $this->createStub(DatabaseConnection::class);
        $dbConnStub->method('getConnection')->willReturn($pdo);

        $model = new signup_model($dbConnStub);
        $model->getInscription('utilisateur', '12345');

        $stmt = $pdo->prepare('SELECT * FROM users WHERE login = ?');
        $stmt->execute(['utilisateur']);
        $user = $stmt->fetch(\PDO::FETCH_OBJ);

        $this->assertSame('utilisateur', $user->login);
        $this->assertTrue(password_verify('12345', $user->password));
    }

    public function test_doublon_leve_exception(): void
    {
        $pdo = new \PDO('sqlite::memory:');
        $pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, login TEXT UNIQUE, password TEXT, reset_code TEXT, expiration_date TEXT)");

        $dbConnStub = $this->createStub(DatabaseConnection::class);
        $dbConnStub->method('getConnection')->willReturn($pdo);

        $model = new signup_model($dbConnStub);
        $model->getInscription('utilisateur', '12345');

        $this->expectException(\Exception::class);
        $model->getInscription('utilisateur', 'autre_mdp');
    }
}