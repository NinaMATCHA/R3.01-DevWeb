<?php

    namespace modules\views;

    class signup_view {
        public function show(): void {
            ob_start();
?>

<header>
    <h1>S'inscrire</h1>
</header>

<div class=card>
    <p>
    Si vous voulez accedez à l'ensemble du site blah blah blah vendez votre âme et inscrivez vous :)
    </p>
</div>

<div class="form-area">
    <form action="" method="post">
        <label for="email">Votre adresse email :</label>
        <input type="email" name="email" placeholder="exemple@domaine.fr" class="input" required />
        <label for="password">Votre Mot de Passe :</label>
        <input type="password" name="password" placeholder="Mot de passe" class="input" required />
        <label for="verif">Vérification de votre Mot de Passe :</label>
        <input type="password" name="verif" placeholder="Verification" class="input" required />

        <div>
            <button type="submit" name="action" value="inscription" class="btn">envoyer</button>
            <button type="reset" class="btn">Réinitialiser</button>
        </div>
    </form>
</div>

<?php
            (new \modules\views\layout('Inscription', ob_get_clean()))->show();
        }
    }

?>