<?php

namespace modules\views;

class profil_view {
    public function show(): void {
        ob_start();
?>

<header>
    <h1>Profil</h1>
</header>

<div class="card">
    <p>
    Vous ne possédez pas de compte, créez en un :
    </p>
                
    <a href="index.php?action=signup">
        <button type="button" class="btn">Inscrivez-vous</button>
    </a>
</div>


<div class="card">
    <p>
    Vous avez déjà un compte, connectez vous :
    </p>

    <a href="index.php?action=login">
        <button type="button" class="btn">Connectez-vous</button>
    </a>
</div>

<?php
        (new \modules\views\layout('Profil', ob_get_clean()))->show();
    }
}
?>