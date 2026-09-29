<?php

namespace modules\views;

class hello_view {
    public function show(): void {
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