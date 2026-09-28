<?php

namespace modules\views;

class profil_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("profil");
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
        end_page();
    }
}
?>