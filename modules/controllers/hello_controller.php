<?php

namespace modules\controllers;

class hello_controller {
    public function execute(): void {
        session_start();
        if (isset($_SESSION['email'])) {
            (new \modules\views\hello_view())->show();
        }
        else {
            header("location:index.php?action=login");
            exit();
        }
    }
}

?>