<?php

namespace modules\controllers;

class book_controller {
    public function execute(): void {
        session_start();
        if (isset($_SESSION['email'])) {
            (new \modules\views\book_view())->show();
        }
        else {
            header('location: index.php?action=account');
            exit();
        }
    }
}

?>