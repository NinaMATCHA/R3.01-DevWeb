<?php
/* Pour le moment on affiche juste la page mais il faudra prendre en compte l'id de l'utilisateur qui veut
   se connecter en placant $id en paramètre dans la fonction execute */
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\login_model;

class login_controller {
    public function execute(): void {

        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_action = filter_input(INPUT_POST, 'action');

            if ($_action === 'logUser') {

                $_login = filter_input(INPUT_POST, 'email');
                $_password = filter_input(INPUT_POST, 'password');

                if ($_login && $_password) {
                    $connectionModel = new login_model(DatabaseConnection::getInstance());
                    $connection = $connectionModel->getConnection($_login, $_password);

                    if (!empty($connection)) {
                        $_SESSION['email'] = $_login;
                        header('Location: index.php');
                        exit();
                    }
                    else {
                        header('Location: index.php?action=login');
                        exit();
                    }
                }
                else {
                    header('Location: index.php?action=login');
                    exit();
                }
            }
        }
        
        (new \modules\views\login_view())->show();
    }
}

?>