<?php

namespace modules\controllers;

class Salou_controller {
    public function execute(): void {
        (new \modules\views\salou_view())->show();
    }
}

?>