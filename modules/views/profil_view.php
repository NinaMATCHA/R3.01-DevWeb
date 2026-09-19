<?php

namespace modules\views;

class profil_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("profil");
?>

        <div class="zone-bienvenue-h1">
            <h1><span class="bienvenue">Profil</span></h1>
        </div>

        <div class="bloc-text b1">
            <div class="zone-text">
                <p>
                    Vous ne possédez pas de compte, créez en un :
                </p>
            </div>

            <div class="zone-bouton">
                <a href="index.php?action=inscription">
                    <button type="button" class="bouton">Inscrivez-vous</button>
                </a>
            </div>
        </div>


        <div class="bloc-text b1">
            <div class="zone-text">
                <p>
                    Vous avez déjà un compte, connectez vous :
                </p>
            </div>

            <div class="zone-bouton">
                <a href="index.php?action=connection">
                    <button type="button" class="bouton">Connectez-vous</button>
                </a>
            </div>
        </div>

<?php
        end_page();
    }
}
?>