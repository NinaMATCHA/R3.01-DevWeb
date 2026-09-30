<?php
/* ATTENTION : NE PAS OUBLIER DE CHANGER LE NOM DES PAGES POUR "SALOU", "NEVOT" ET "BONJOUR" QUAND ON AURA LE SUJET */

function start_page($title): void
{
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="_assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Bienvenue</a></li>
        <li><a href="index.php?action=salou">SALOU</a></li>
        <li><a href="index.php?action=nevot">NEVOT</a></li>
        <li><a href="index.php?action=bonjour">BONJOUR</a></li>
    </ul>
    <div class="dropdown">
        <button type="button">Menu ▾</button>
        <div class="menu">
            <a href="index.php?action=inscription">Inscription</a>
            <a href="index.php?action=connection">Connexion</a>
            <a href="index.php?action=profil">Profil</a>
        </div>
    </div>
</nav>

<?php
}

function end_page(): void
{
?>

    <footer>
        <h2>Mention légales</h2>
        <p>
            Le présent du site à été réalisé par FRANCOIS Ewan, JAMBERT Aurele, KHADISSOVA Lezina, 
            MATIC CHARBIT Nina et MOYENIN Nicolas.

            Hébergé par alwaysdata.
        </p>
    </footer>

</body>
</html>

<?php
}
?>