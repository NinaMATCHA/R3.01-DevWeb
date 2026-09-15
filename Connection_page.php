<?php

    require 'utils.inc.php';
start_page('Connection');
?>


<div class="zone-inscription-connexion">
    <h1>Connexion</h1>
</div>

<div class="zone-text">
    <div class="bloc-text i1">
        <p>
            Vous avez déjà vendu votre âme ? Connectez vous pour accéder à l'ensemble du site.
        </p>
    </div>
</div>

<div class="formulaire">
    <form action="connection.php" method="post" class="contact-formulaire">
        <input type="email" name="email" placeholder="email" class="contact-input" required />
        <input type="password" name="mdp" placeholder="Mot de passe" class="contact-input" required />

        <div class="zone-bouton">
            <button type="submit" name="action" value="connection" class="bouton-formulaire">envoyer</button>
            <button type="reset" class="bouton-formulaire">Réinitialiser</button>
            <button type="submit" name="MdpOublie" class="bouton-formulaire">Mot de passe oublié ?</button>
        </div>
    </form>
</div>


<?php
end_page();
?>