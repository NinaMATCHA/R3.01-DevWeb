<?php

require '_assets/includes/autoloader.php';

try {
    if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'login') {
            (new \modules\controllers\loginController())->execute();
        }

        else if ($_GET['action'] === 'signup') {
            (new \modules\controllers\signupController())->execute();
        }

        else if ($_GET['action'] === 'account') {
            (new \modules\controllers\accountController())->execute();
        }

        else if ($_GET['action'] === 'book') {
            (new \modules\controllers\bookController())->execute();
        }

        else if ($_GET['action'] === 'world') {
            (new \modules\controllers\worldController())->execute();
        }

        else if ($_GET['action'] === 'activity') {
            (new \modules\controllers\activityController())->execute();
        }

        else if ($_GET['action'] === 'forgot_pwd') {
            (new \modules\controllers\forgotPasswordController())->execute();
        }

        else if ($_GET['action'] === 'delete') {
            (new \modules\controllers\deleteController())->execute();
        }

        else {
            throw new Exception('La page que vous recherchez n\'existe pas');
        }
    }
    else {
        (new \modules\controllers\HomepageController())->execute();
    }
} catch (Exception $e) {
    (new \modules\views\error($e->getMessage()))->show();
}
?>