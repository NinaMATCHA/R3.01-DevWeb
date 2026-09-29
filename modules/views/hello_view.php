<?php

namespace modules\views;

class bonjour_view {
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();  
?>

<main>
        <div class="card">
            <h1>BONJOUR !</h1>
        </div>
</main>

<?php
        (new \modules\views\layout('Bonjour', ob_get_clean()))->show();
    }
}
?>