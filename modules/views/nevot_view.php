<?php

namespace modules\views;

class nevot_view {
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();
        
?>

<div class="card">
    <h1>NEVOT PHP MASTER LVL 1000000000  !</h1>
</div>

<?php
        (new \modules\views\Layout('Nevot', ob_get_clean()))->show();
    }
}
?>