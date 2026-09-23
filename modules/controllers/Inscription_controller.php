<?php
/* Comme connection, pour le moment on veut juste afficher mais on fera la gestion apres avec la bdd */
namespace modules\controllers;

require_once __DIR__ . '/../../_assets/includes/database.php';
use DatabaseConnection;
use modules\models\Inscription_model;

class Inscription_controller {
    public function execute(): void {
        $inscriptionModel = new Inscription_model(DatabaseConnection::getInstance());
        $inscription = $inscriptionModel->getConnection();
        (new \modules\views\inscription_view())->show();
    }
}
?>