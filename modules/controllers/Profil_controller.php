<?php

namespace modules\controllers;

class Profil_controller {
    public function execute(): void {
        (new \modules\views\profil_view())->show();
    }
}

?>