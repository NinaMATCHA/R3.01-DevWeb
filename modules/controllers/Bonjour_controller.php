<?php

namespace modules\controllers;

class Bonjour_controller {
    public function execute(): void {
        (new \modules\views\bonjour_view())->show();
    }
}

?>