<?php
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\login_model;


/**
 * Contrôleur de la page de connexion.
 * 
 * Gère le traitement du formulaire de connexion en POST 
 * et la mise en session de l'utilisateur authentifié.
 */

class login_controller {


/**
     * Exécute la logique de connexion.
     * 
     * Traite les données POST transmises, tente l'authentification
     * via le modèle, initialise la session et redirige vers l'accueil ou affiche les erreurs.
     * 
     * @return void
     */
    public function execute(): void {

        session_start();

        $error = null; // On met l'erreur a null de base car on la met dans le show a la fin

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
                        $error = 'Email ou mot de passe incorrect';
                    }
                }
                else {
                    $error = 'Veuillez remplir tous les champs';
                }
            }
        }
        
        (new \modules\views\login_view())->show($error);
    }
}

?>