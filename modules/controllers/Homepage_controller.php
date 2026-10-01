<?php

namespace modules\controllers;

class Homepage_controller {
    public function execute(): void {
        (new \modules\views\homepage_view())->show();
    }
}

?>