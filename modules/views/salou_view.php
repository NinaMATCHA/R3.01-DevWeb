<?php

namespace modules\views;

class salou_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page('salou');
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">SALOU IS THE BEST TEACHER !</span></h1>
        </div>

<?php
        end_page();
    }
}

?>