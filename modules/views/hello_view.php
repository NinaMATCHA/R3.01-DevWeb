<?php

namespace modules\views;

class hello_view {
    public function show(): void {
        ob_start();
?>

<div class="card">
    <h1>BONJOUR !</h1>
</div>

<?php
        (new \modules\views\Layout('Bonjour', ob_get_clean()))->show();
    }
}
?>