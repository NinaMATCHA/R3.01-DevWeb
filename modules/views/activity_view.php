<?php

namespace modules\views;

class activity_view {
    public function show(): void {
        ob_start();
?>

<header>
    <h1>Activités</h1>
</header>

<div class="card">
    Sélectionnez votre niveau
</div>



<?php
        (new \modules\views\Layout('activity', ob_get_clean()))->show();
    }
}
?>