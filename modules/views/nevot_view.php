<?php

namespace modules\views;

class nevot_view {
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();
        
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">NEVOT PHP MASTER LVL 1000000000  !</span></h1>
        </div>

<?php
        (new \modules\views\layout('Nevot', ob_get_clean()))->show();
    }
}
?>