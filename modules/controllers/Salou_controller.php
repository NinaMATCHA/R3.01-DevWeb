<?php

namespace modules\controllers;

class Salou_controller {
    public function execute(): void {
        session_start();
        if (isset($_SESSION['email'])) {
            (new \modules\views\salou_view())->show();
        }
        else {
            header('location: index.php?action=account');
            exit();
        }
    }
}

?>