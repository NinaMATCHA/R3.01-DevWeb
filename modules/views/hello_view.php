<?php

namespace modules\views;

class hello_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Bonjour");   
?>

<main>
        <div class="card">
            <h1>BONJOUR !</h1>
        </div>
</main>

<?php
        end_page();
    }
}
?>