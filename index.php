<?php
/* MOT DE PASSE POUR LE SITE : sae_mdp_r301 */


require '_assets/include/utils/utils.inc.php';

start_page('index');
?>

<div class="zone-bienvenue-h1">
    <h1><span class="bienvenue">Bienvenue à  !</span></h1>
</div>

<div class="zone-bouton-profil">
    <a href="profil.php">
        <button type="button" class="bouton">Votre profil</button>
    </a>
</div>

<div class="bloc-text b1">
    <div class="zone-text">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
    </div>
</div>

<div class="bloc-text b2">
    <div class="zone-text">
        <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
    </div>
</div>
<div class="zone-bouton">
    <a href="Inscription.php">
        <button type="button" class="bouton">Inscrivez-vous</button>
    </a>
    <a href="Connection_page.php">
        <button type="button" class="bouton">Connectez-vous</button>
    </a>
</div>

<?php
end_page();
?>

