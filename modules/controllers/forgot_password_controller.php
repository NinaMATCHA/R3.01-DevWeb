<?php

namespace modules\controllers;

class forgot_password_controller {
    function execute(): void {
        (new \modules\views\forgot_password_view())->show();
    }
}

?>