<?php
namespace modules\controllers;

use _assets\includes\DatabaseConnection;
use modules\models\signup_model;
use includes\Exception_database_controller;
use PDOException;
use Exception;

/**
 * Contrôleur gérant l'inscription des utilisateurs.
 * 
 * Traite la soumission du formulaire d'inscription, vérifie la cohérence
 * des données saisies et fait appel au modèle pour enregistrer le compte.
 */
class signup_controller {


    /**
     * Exécute le traitement du formulaire et affiche la vue associée.
     *
     * @return void
     */
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
                    try {
                        $inscriptionModel = new signup_model(DatabaseConnection::getInstance());
                        $inscription = $inscriptionModel->getInscription($_login, $_password);
                        $_SESSION['email'] = $_login;
                        $_SESSION['password'] = $_password;
                        header('Location: index.php?success=true');
                        exit();
                        # Les | permettent juste de reunnir 3 catch en 1 seul pour eviter d'en avoir 3
                    } catch (Exception_database_controller | PDOException | Exception $e) {
                        $error = 'Ce compte existe déjà';
                    }
                }
                else {
                    $error = 'Veuillez remplir le formulaire';
                }
            }
        }

        (new \modules\views\signup_view())->show($error);
    }
}
?>