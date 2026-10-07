<?php

namespace modules\controllers;

class activity_controller {
    public function execute(): void {
        session_start();
        if (isset($_SESSION['email'])) {
                $op1 = (int) $_POST['op1'];
                $op2 = (int) $_POST['op2'];
                $op = 0;

                if (isset($_POST['action'])) {
                    echo 'bouton appuyé';

                    if ($_POST['action'] == '+') {
                        $op = $op1 + $op2;
                    }
                    else if ($_POST['action'] == '-') {
                        $op = $op1 - $op2;
                    }
                    else if ($_POST['action'] == '*') {
                        $op = $op1 * $op2;
                    }
                    else if ($_POST['action'] == '/') {
                        $op = $op1 / $op2;
                    }
                }
                else {
                    $result = "L'action n'a pas été enregistrée";
                }
                $result = $op;
            (new \modules\views\activity_view())->show($result);
        }
        else {
            header("location:index.php?action=account");
            exit();
        }
    }
}

?>