<?php

namespace modules\controllers;

class Nevot_controller {
    public function execute(): void {
        (new \modules\views\nevot_view())->show();
    }
}

?>