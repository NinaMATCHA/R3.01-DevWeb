<?php

namespace modules\views;

class account_view {
    public function show(): void {
        ob_start();
?>

<header>
    <h1>Compte</h1>
</header>

<div class="card">
    <p>
    Vous ne possédez pas de compte, créez en un :
    </p>
                
    <a href="index.php?action=signup" class="btn">
        Inscrivez-vous
    </a>
</div>


<div class="card">
    <p>
    Vous avez déjà un compte, connectez vous :
    </p>

    <a href="index.php?action=login" class="btn">
        Connectez-vous 
    </a>
</div>

<?php
        (new \modules\views\layout('Profil', ob_get_clean()))->show();
    }
}
?>