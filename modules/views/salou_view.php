<?php

namespace modules\views;

class salou_view {
    public function show(): void {
        ob_start();
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">SALOU IS THE BEST TEACHER !</span></h1>
        </div>

<?php
        (new \modules\views\layout('Salou', ob_get_clean()))->show();
    }
}

?>