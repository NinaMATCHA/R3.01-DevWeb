<?php
/* Pour le moment on affiche juste la page mais il faudra prendre en compte l'id de l'utilisateur qui veut
   se connecter en placant $id en paramètre dans la fonction execute */
namespace modules\controllers;

require_once __DIR__ . '/../../_assets/includes/DatabaseConnection.php';
use DatabaseConnection;
use modules\models\Connection_model;

class Connection_controller {
    public function execute(): void {
        $connectionModel = new Connection_model(DatabaseConnection::getInstance());
        $connection = $connectionModel->getConnection();
        (new \modules\views\connection_view())->show();
    }
}

?>