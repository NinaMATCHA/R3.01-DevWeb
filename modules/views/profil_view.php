<?php

namespace modules\views;

class profil_view {
    public function show(): void {
        ob_start();
?>

<main>
        <header>
            <h1>Profil</h1>
        </header>

        <div class="card">
            <p>
                    Vous ne possédez pas de compte, créez en un :
            </p>
                
            <a href="index.php?action=inscription">
                <button type="button" class="btn">Inscrivez-vous</button>
            </a>
        </div>


        <div class="card">
            <p>
                    Vous avez déjà un compte, connectez vous :
            </p>

            <a href="index.php?action=connection">
                <button type="button" class="btn">Connectez-vous</button>
            </a>
        </div>
</main>

<?php
        (new \modules\views\layout('Profil', ob_get_clean()))->show();
    }
}
?>