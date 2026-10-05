<?php

namespace modules\views;

class Layout
{
    public function __construct(
        private string $title,
        private string $content
    ) {}

    public function show(): void
    {

        $_Image = '/../../_assets/Images/FubukiRef.jpg';
        $_description = 'Liens vers notre super site \'MATHEOPOLIS\'. Suivez une aventure folle et accomplissez les énigmes tout au long de votre parcours.';
        $_titreRef = 'Matheopolis';
        //session_start();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="<?=$_titreRef?>"\>
    <meta property="og:description" content="<?=$_description?>"/>
    <meta property="og:image" content="<?=$_Image?>"/>
    <title><?= htmlspecialchars($this->title); ?></title>
    <link rel="icon" href="favicon.ico">
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
            <?php if (!isset($_SESSION['email'])) { ?>
            <a href="index.php?action=signup">Inscription</a>
            <a href="index.php?action=login">Connexion</a>
            <?php } if (isset($_SESSION['email'])) { ?>
            <a href="signout.php">Déconnexion</a>
            <?php }?>
        </div>
    </div>
</nav>

<main>
    <?= $this->content; ?>
</main>

<footer>
    <h2>Mention légales</h2>
    <p>
        Le présent du site à été réalisé par FRANCOIS Ewan, JAMBERT Aurele, KHADISSOVA Lezina, 
        MATIC CHARBIT Nina et MOYENIN Nicolas.

        Hébergé par alwaysdata.
    </p>
    <a href="sitemap.xml">Plan du site.</a>
</footer>

</body>
</html>
<?php
    }
}

?>