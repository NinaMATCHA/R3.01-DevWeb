<?php
/* MOT DE PASSE POUR LE SITE : sae_mdp_r301 */

require 'utils.inc.php';
?>

<?php
start_page('titre');
end_page();
?>

<?php
require '_assets/includes/autoloader.php';

try {
    $action = filter_input(INPUT_GET, 'action');
    if ($action) {
        // Aiguillage vers controleur post
        if ($_GET['action'] == 'post') {
            if (filter_input(INPUT_GET, 'id') && $_GET['id'] > 0) {
                (new \Blog\Controllers\Post\Post())->execute($_GET['id']);
                return;
            }
            throw new ControllerException('Aucun identifiant de billet envoyé');
        }
        // Aiguillage vers controleur inscription
        if ($action === 'inscription') {
        (new \Blog\Controllers\User\Inscription())->execute();
        return;
        }
        throw new ControllerException('La page que vous recherchez n\'existe pas');
    }
    (new \Blog\Controllers\Homepage\Homepage())->execute();
} catch (ControllerException $e) {
    (new \Blog\Views\Error($e->getMessage()))->show();
}