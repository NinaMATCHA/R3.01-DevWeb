<?php
/* Pour le moment on affiche juste la page mais il faudra prendre en compte l'id de l'utilisateur qui veut
   se connecter en placant $id en paramètre dans la fonction execute */
namespace modules\controllers;

require_once __DIR__ . '/../../_assets/includes/DatabaseConnection.php';
use DatabaseConnection;
use modules\models\Connection_model;

class Connection_controller {
    public function execute(): void {
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_login = $_POST['email'];
                $_password = $_POST['password'];
                $_action = $_POST['action'];

                if ($_action === 'connection') {

                    $connectionModel = new Connection_model(DatabaseConnection::getInstance());
                    $connection = $connectionModel->getConnection($_login, $_password);
                    if ($connection == ''){
                        echo "Pas de compte trouvé ou mot de passe erroné";
                    }
                    else echo $connection;

                    header('Location: index.php?success=true');
                    exit();
                }
            }
        }
        
        (new \modules\views\connection_view())->show();
    }
}

?>