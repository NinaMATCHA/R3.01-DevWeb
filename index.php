<?php

require '_assets/includes/autoloader.php';

try {
    if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'login') {
            (new \modules\controllers\login_controller())->execute();
        }

        else if ($_GET['action'] === 'signup') {
            (new \modules\controllers\signup_controller())->execute();
        }

        else if ($_GET['action'] === 'account') {
            (new \modules\controllers\account_controller())->execute();
        }

        else if ($_GET['action'] === 'book') {
            (new \modules\controllers\book_controller())->execute();
        }

        else if ($_GET['action'] === 'world') {
            (new \modules\controllers\world_controller())->execute();
        }

        else if ($_GET['action'] === 'activity') {
            (new \modules\controllers\activity_controller())->execute();
        }

        else if ($_GET['action'] === 'forgot_pwd') {
            (new \modules\controllers\forgot_password_controller())->execute();
        }

        else if ($_GET['action'] === 'delete') {
            (new \modules\controllers\delete_controller())->execute();
        }

        else {
            throw new Exception('La page que vous recherchez n\'existe pas');
        }
    }
    else {
        (new \modules\controllers\Homepage_controller())->execute();
    }
} catch (Exception $e) {
    (new \modules\views\error($e->getMessage()))->show();
}
?>