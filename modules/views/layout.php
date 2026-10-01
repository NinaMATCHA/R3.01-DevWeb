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
        //session_start();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($this->title); ?></title>
    <link rel="icon" href="/favicon.ico">
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
            <a href="index.php?action=signup">Inscription</a>
            <a href="index.php?action=login">Connexion</a>
            <a href="index.php?action=profil">Profil</a>
            <?php if (isset($_SESSION['email'])) { ?>
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
</footer>

</body>
</html>
<?php
    }
}

?>