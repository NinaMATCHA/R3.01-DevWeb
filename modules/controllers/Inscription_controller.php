<?php
/* Comme connection, pour le moment on veut juste afficher mais on fera la gestion apres avec la bdd */
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\Inscription_model;

class Inscription_controller {
    public function execute(): void {
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_login = $_POST['email'];
                $_password = $_POST['password'];
                $_action = $_POST['action'];

                if ($_action === 'inscription') {

                    $inscriptionModel = new Inscription_model(DatabaseConnection::getInstance());
                    $inscription = $inscriptionModel->getInscription($_login, $_password);

                    header('Location: index.php?success=true');
                    exit();
                }
            }
        }

        (new \modules\views\inscription_view())->show();
    }
}
?>