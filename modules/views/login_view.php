<?php

namespace modules\views; /* Toujours en premier */

class login_view {
    public function show(?string $error = null): void {
        ob_start();
?>

<header>
    <h1>Connexion</h1>
</header>

<div class="card">
    <div>
        <p>
        Vous avez déjà vendu votre âme ? Connectez vous pour accéder à l'ensemble du site.
        </p>
    </div>
</div>

<div class="form-area">
    <form action="index.php?action=login" method="post">
        <label for="email">Votre adresse email :</label>
        <input type="email" name="email" placeholder="exemple@domaine.fr" class="input" required />
        <label for="password">Votre Mot de Passe :</label>
        <input type="password" name="password" placeholder="Mot de passe" class="input" required />

        <div>
            <button type="submit" name="action" value="logUser" class="btn">Envoyer</button>
            <button type="reset" class="btn">Réinitialiser</button>
        </div>
    </form>

<?php
    if ($error) {
        echo htmlspecialchars($error);
    }
?>
            
    <a href="index.php?action=mdpOublie">Mot de passe oublié ?</a>
</div>

<?php
        (new \modules\views\layout('Connection', ob_get_clean()))->show();
    }
}
?>