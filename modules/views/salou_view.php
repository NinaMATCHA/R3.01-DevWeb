<?php

namespace modules\views;

class salou_view {
    public function show(): void {
        ob_start();
?>

<div class="card">
    <h1>SALOU</h1>
</div>

<?php
        (new \modules\views\Layout('Salou', ob_get_clean()))->show();
    }
}

?>