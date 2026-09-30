<?php

namespace modules\views;

class salou_view {
    public function show(): void {
        ob_start();
?>

<main>
        <div class="card">
            <h1>SALOU IS THE BEST TEACHER !</h1>
        </div>
</main>

<?php
        (new \modules\views\layout('Salou', ob_get_clean()))->show();
    }
}

?>