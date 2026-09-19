<?php

namespace modules\views;

class error {
    public function __construct(private string $message) {} // On recup ici le $e->message dans le routeur

    public function show(): void {
        ?>
        <h1>Oops</h1>
        <p><?= htmlspecialchars($this->message) ?>
        <a href="index.php"> Retour à l'acceuil</a>
        <?php
    }
}

?>