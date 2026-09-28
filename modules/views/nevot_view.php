<?php

namespace modules\views;

class nevot_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';   
        start_page("Nevot");
?>

<main>
        <div class="card">
            <h1>NEVOT PHP MASTER LVL 1000000000  !</h1>
        </div>
</main>

<?php
        end_page();
    }
}
?>