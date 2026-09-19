<?php
/* Comme connection, pour le moment on veut juste afficher mais on fera la gestion apres avec la bdd */
namespace modules\controllers;

class Inscription_controller {
    public function execute(): void {
        (new \modules\views\inscription_view())->show();
    }
}

?>