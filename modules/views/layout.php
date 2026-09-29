<?php

namespace modules\views;

class Layout { // PSR-12: opening brace next line
    public function __construct(private string $title, private string $content) {}
    public function show(): void { // PSR-12: opening brace next line
?><!DOCTYPE html>
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
        <li><a href="index.php">BIENVENUE</a></li>
        <li><a href="index.php?action=salou">SALOU</a></li>
        <li><a href="index.php?action=nevot">NEVOT</a></li>
        <li><a href="index.php?action=bonjour">BONJOUR</a></li>
    </ul>
</nav>


<head>
    <meta charset="utf-8"/>
    <title><?= $this->title; ?></title>
    <link href="style.css" rel="stylesheet"/>
</head>

<body>
    <?= $this->content; ?>
</body>

<div class="zone-footer">
    <footer class="footer">
        <h1>Mentions légales</h1>
        <p>
            Le présent site a été réalisé par FRANCOIS Ewan, JAMBERT Aurele, KHADISSOVA Lezina, 
            MATIC CHARBIT Nina et MOYENIN Nicolas.<br>
            Hébergé par alwaysdata.
        </p>
    </footer>
</div>

</body>

</html>
    <?php
    }
}