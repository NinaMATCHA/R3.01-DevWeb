<?php
/* MOT DE PASSE POUR LE SITE : sae_mdp_r301 */

require '_assets/includes/autoloader.php';

try {
    if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'login') {
            (new \modules\controllers\login_controller())->execute();
        }

        else if ($_GET['action'] === 'signup') {
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