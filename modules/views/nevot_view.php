<?php

namespace modules\views;

class nevot_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';   
        start_page("Nevot");
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">NEVOT PHP MASTER LVL 1000000000  !</span></h1>
        </div>

<?php
        end_page();
    }
}
?>