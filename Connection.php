<?php

function start_page($title): void
{
?>

    <!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Bienvenue</a></li>
        <li><a href="#b">SALOU</a></li>
        <li><a href="#c">Nevot</a></li>
        <li><a href="#d">BONJOUR</a></li>
    </ul>
</nav>

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
    <form action="" method="post" class="contact-formulaire">
        <input type="email" name="email" placeholder="email" class="contact-input" required />
        <input type="password" name="mdp" placeholder="Mot de passe" class="contact-input" required />

        <div class="zone-bouton">
            <button type="submit" name="action" class="bouton-formulaire">envoyer</button>
            <button type="reset" class="bouton-formulaire">Réinitialiser</button>
        </div>
    </form>
</div>
<?php
}

function end_page(): void
{
?>

</body>
</html>

<?php
}
?>

<?php
start_page('Connection');
end_page();
?>

