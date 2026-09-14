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

<div class="zone-bienvenue-h1">
    <h1><span class="bienvenue">Bienvenue à  !</span></h1>
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
    <a href="Connection.php">
        <button type="button" class="bouton">Connectez-vous</button>
    </a>
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
