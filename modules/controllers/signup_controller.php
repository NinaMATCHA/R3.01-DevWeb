<?php
/* Comme connection, pour le moment on veut juste afficher mais on fera la gestion apres avec la bdd */
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\signup_model;

class signup_controller {
    public function execute(): void {

        session_start();

        $error = null;

        if (isset($_POST['action']) && !empty($_POST['action'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_login = $_POST['email'];
                $_password = $_POST['password'];
                $_verif_password = $_POST['verif'];
                $_action = $_POST['action'];

                if (empty($_login) || empty($_password) || empty($_verif_password)) {
                    $error = 'Veuillez remplir le formulaire';
                }
                elseif ($_verif_password !== $_password) {
                    $error = 'Les mots de passe ne correspondent pas';
                }

                elseif ($_action === 'inscription') {

                    $inscriptionModel = new signup_model(DatabaseConnection::getInstance());
                    $inscription = $inscriptionModel->getInscription($_login, $_password);

                    header('Location: index.php?success=true');
                    exit();
                }
                else {
                    $errror = 'Veuillez remplir le formulaire';
                }
            }
        }

        (new \modules\views\signup_view())->show($error);
    }
}
?>