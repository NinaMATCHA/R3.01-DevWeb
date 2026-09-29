<?php
/* MOT DE PASSE POUR LE SITE : sae_mdp_r301 */

require '_assets/includes/autoloader.php';

try {
    if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'connection') {
            /*
            Tout ce bloc est en commentaire parce que le code du prof prend deja en compte la gestion des id avec la connection a la bdd
            pour le moment on veux juste afficher la page trkl

            if (filter_input(INPUT_GET, 'id') && $_GET['id'] > 0 pareil, quand on va gérer la gestion des id) {
                (new \modules\controllers\Connection())->execute();/*->execute($_GET['id']); --> quand on va gérer la gestion des id
            }
            else {
                throw new ControllerException('Aucun identifiant de billet envoyé');
            }
            */
            (new \modules\controllers\login_controller())->execute();
        }

        else if ($_GET['action'] === 'inscription') {
            (new \modules\controllers\signup_controller())->execute();
        }

        else if ($_GET['action'] === 'profil') {
            (new \modules\controllers\Profil_controller())->execute();
        }

        else if ($_GET['action'] === 'salou') {
            (new \modules\controllers\Salou_controller())->execute();
        }

        else if ($_GET['action'] === 'nevot') {
            (new \modules\controllers\Nevot_controller())->execute();
        }

        else if ($_GET['action'] === 'bonjour') {
            (new \modules\controllers\hello_controller())->execute();
        }

        else if ($_GET['action'] === 'mdpOublie') {
            (new \modules\controllers\forgot_password_controller())->execute();
        }

        else {
            throw new ControllerException('La page que vous recherchez n\'existe pas');
        }
    }
    else {
        (new \modules\controllers\Homepage\Homepage_controller())->execute();
    }
} catch (ControllerException $e) {
    (new \modules\views\error($e->getMessage()))->show();
}
?>
