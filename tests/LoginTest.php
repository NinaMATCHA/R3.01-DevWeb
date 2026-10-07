<?php

use PHPUnit\Framework\TestCase;
use modules\models\LoginModel;
use _assets\includes\DatabaseConnection;

class LoginTest extends TestCase
{

public function test_bon_mdp(): void
{
    $pdo = new \PDO('sqlite::memory:');
    $pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, login TEXT, password TEXT)");
    
    $hash = password_hash('12345', PASSWORD_DEFAULT);
    $pdo->exec("INSERT INTO users (login, password) VALUES ('utilisateur', '$hash')");

    $dbConnStub = $this->createStub(DatabaseConnection::class);
    $dbConnStub->method('getConnection')->willReturn($pdo);

    $model = new LoginModel($dbConnStub);
    $result = $model->getConnection('utilisateur', '12345');

    $this->assertSame('utilisateur', $result->login);
}

public function test_mauvais_mdp(): void
{
    $pdo = new \PDO('sqlite::memory:');
    $pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, login TEXT, password TEXT)");

    $hash = password_hash('bon_mdp', PASSWORD_DEFAULT);
    $pdo->exec("INSERT INTO users (login, password) VALUES ('utilisateur', '$hash')");

    $dbConnStub = $this->createStub(DatabaseConnection::class);
    $dbConnStub->method('getConnection')->willReturn($pdo);

    $model = new LoginModel($dbConnStub);
    $result = $model->getConnection('utilisateur', 'mauvais_mdp');

    $this->assertNull($result);
}
}