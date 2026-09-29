<?php

namespace modules\views;

class nevot_view {
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();
        
?>

<main>
        <div class="card">
            <h1>NEVOT PHP MASTER LVL 1000000000  !</h1>
        </div>
</main>

<?php
        (new \modules\views\layout('Nevot', ob_get_clean()))->show();
    }
}
?>