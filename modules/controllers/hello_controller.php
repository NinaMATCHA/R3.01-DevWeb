<?php

namespace modules\controllers;

class hello_controller {
    public function execute(): void {
        (new \modules\views\hello_view())->show();
    }
}

?>