<?php
/* ATTENTION : NE PAS OUBLIER DE CHANGER LE NOM DES PAGES POUR "SALOU", "NEVOT" ET "BONJOUR" QUAND ON AURA LE SUJET */

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
        <li><a href="salou.php">SALOU</a></li>
        <li><a href="nevot.php">Nevot</a></li>
        <li><a href="bonjour.php">BONJOUR</a></li>
    </ul>
</nav>



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
