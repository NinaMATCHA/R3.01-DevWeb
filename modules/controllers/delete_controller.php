<?php
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\delete_model;

/**
 * Contrôleur de la page de suppression.
 * 
 * Gère le traitement du formulaire de suppression en POST 
 * et la deconnexion de l'utilisateur.
 */
class delete_controller {
    /**
     * Exécute la logique de suppression.
     * 
     * Traite les données POST transmises, tente la suppression
     * via le modèle, reinitialise la session et redirige vers l'accueil ou affiche les erreurs.
     * 
     * @return void
     */
    public function execute(): void {

        session_start();
        if (isset($_SESSION['email'])) {

            $error = null;
            $_login = $_SESSION['email'];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_action = filter_input(INPUT_POST, 'action');

                if ($_action === 'deleteUser') {
                    $_password = filter_input(INPUT_POST, 'password');
                    if ($_password) {
                        $deleteModel = new delete_model(DatabaseConnection::getInstance());
                        $delete = $deleteModel->getDelete($_login, $_password);

                        if($delete){
                            $_SESSION['email'] = null;
                            $_SESSION['password'] = null;
                            header('Location: index.php');
                        }
                        else {
                            $error = 'Mot de passe incorrect';
                        }
                    }
                    else {
                        $error = 'Veuillez remplir tous les champs';
                    }
                }
            }
            (new \modules\views\delete_view())->show($error);
        }
        else {
            header('location: index.php?action=account');
            exit();
        }
    }
}

?>