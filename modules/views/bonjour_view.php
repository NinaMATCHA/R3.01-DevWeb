<?php

namespace modules\views;

class bonjour_view {
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();  
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">BONJOUR !</span></h1>
        </div>

<?php
        (new \modules\views\layout('Bonjour', ob_get_clean()))->show();
    }
}
?>