<?php

namespace modules\views;

class hello_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Bonjour");   
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">BONJOUR !</span></h1>
        </div>

<?php
        end_page();
    }
}
?>