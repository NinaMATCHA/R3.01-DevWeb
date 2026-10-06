<?php

namespace modules\views; /* Toujours en premier */

class homepage_view {
    public function show(): void {
        session_start();
        ob_start();
?>

<header>
    <span class="small">BIENVENUE SUR</span>
    <h1>Matheopolis</h1>
</header>

    <div class="card">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    </div>

    <div class="card parchment">
    <p>
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
</div>

<?php
        (new \modules\views\Layout('Bienvenue', ob_get_clean()))->show();
    }
}
?>