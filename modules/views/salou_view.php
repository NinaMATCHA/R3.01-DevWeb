<?php

namespace modules\views;

class salou_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page('salou');
?>

<main>
        <div class="card">
            <h1>SALOU IS THE BEST TEACHER !</h1>
        </div>
</main>

<?php
        end_page();
    }
}

?>