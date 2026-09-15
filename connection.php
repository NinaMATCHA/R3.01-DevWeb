<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $action = $_POST['action'];

        if ($action === 'connection') {
            /* Verifier avec un autre if si l'utilisateur possède déjà un compte (regarder avec la base de donnée) */
            /* if ($email === [$email de la base de donnée] && $mdp === [$mdp de la base de donnée]) {
                echo 'ça marche'; test simple juste pour voir si ça marche bien
            } */
        }
    }

?>