<?php

namespace modules\views; /* Toujours en premier */

class homepage_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Homepage");
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">Bienvenue à  !</span></h1>
        </div>

        <div class="zone-bouton-profil">
            <a href="index.php?action=profil">
                <button type="button" class="bouton">Votre profil</button>
            </a>
        </div>

        <div class="bloc-text b1">
            <div class="zone-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="bloc-text b2">
            <div class="zone-text">
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
        <div class="zone-bouton">
            <a href="index.php?action=inscription">
                <button type="button" class="bouton">Inscrivez-vous</button>
            </a>
            <a href="index.php?action=connection">
                <button type="button" class="bouton">Connectez-vous</button>
            </a>
        </div>

<?php
        end_page();
    }
}
?>