<?php

namespace modules\views; /* Toujours en premier */

class connection_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("connection");
?>

        <div class="zone-inscription-connexion">
            <h1>Connection</h1>
        </div>

        <div class="zone-text">
            <div class="bloc-text i1">
                <p>
                    Vous avez déjà vendu votre âme ? Connectez vous pour accéder à l'ensemble du site.
                </p>
            </div>
        </div>

        <div class="formulaire">
            <form action="index.php?action=connection" method="post" class="contact-formulaire">
                <input type="email" name="email" placeholder="email" class="contact-input" required />
                <input type="password" name="mdp" placeholder="Mot de passe" class="contact-input" required />

                <div class="zone-bouton">
                    <button type="submit" name="action" value="connection" class="bouton-formulaire">envoyer</button>
                    <button type="reset" class="bouton-formulaire">Réinitialiser</button>
                </div>
            </form>
            
            <a href="index.php?action=mdpOublie">
                <button type="submit" name="MdpOublie" class="bouton-formulaire">Mot de passe oublié ?</button>
            </a>
        </div>

<?php
        end_page();
    }
}
?>