<?php

    /* Exemple venant du cm du prof */
    namespace Blog\View;

    class Inscription_HomePage {
        public function show(): void {
            ob_start();
?>

<?php

    require '_assets/include/utils/utils.inc.php';
    start_page('Inscription');

?>

<div class="zone-inscription-connexion">
    <h1>S'inscrire</h1>
</div>

<div class="zone-text">
    <div class="bloc-text i1">
        <p>
            Si vous voulez accedez à l'ensemble du site blah blah blah vendez votre âme et inscrivez vous :)
        </p>
    </div>
</div>

<div class="formulaire">
    <form action="" method="post" class="contact-formulaire">
        <input type="text" name="prenom" placeholder="Prénom" class="contact-input" required>
        <input type="text" name="nom" placeholder="Nom" class="contact-input" required />
        <input type="text" name="username" placeholder="username" class="contact-input" required />
        <input type="email" name="email" placeholder="email" class="contact-input" required />
        <input type="password" name="mdp" placeholder="Mot de passe" class="contact-input" required />
        <input type="password" name="verif" placeholder="Verification" class="contact-input" required />

        <div class="zone-bouton">
            <button type="submit" name="action" class="bouton-formulaire">envoyer</button>
            <button type="reset" class="bouton-formulaire">Réinitialiser</button>
        </div>
    </form>
</div>

<?php
        end_page();
    
    
        (new \Blog\Views\Layout('Inscription', ob_get_clean())) -> show();
        }
    }
?>