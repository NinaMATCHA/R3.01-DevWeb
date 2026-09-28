<?php

namespace modules\views; /* Toujours en premier */

class legal_notice_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Bienvenue");
?>

<section class="legal_notice">
    <h1>Mentions légales</h1>

    <article>
        <h2> I - Cadre du projet</h2>
        <p>
            Ce site web est réalisé à des fins pédagogiques dans le cadre 
            de notre formation en BUT Informatique. Il ne poursuit 
            aucun but lucratif ou commercial.
        </p>
    </article>

    <article>
        <h2> II - Édition du site</h2>
        <p>Le site est développé et édité par :</p>
        <ul>
            <li><strong>Ewan François</strong></li>
            <li><strong>Nicolas Moyenin</strong></li>
            <li><strong>Nina Matcha</strong></li>
            <li><strong>Aurèle Jambert</strong></li>
        </ul>
        <p><strong>Directeur de publication :</strong> Mickael Martin - Nevot</p>
    </article>

    <article>
        <h2> III - Université</h2>
        <p>
            IUT d'Aix (Département Informatique)<br>
            Avenue Gaston Berger, 13625 Aix-en-Provence<br>
            Site web : https://www.univ-amu.fr
        </p>
    </article>

    <article>
        <h2> IV - Hébergement</h2>
        <p>
            Le site est hébergé par :<br>
            <strong>AlwaysData</strong><br>
            Site web : https://www.alwaysdata.com/fr/
        </p>
    </article>

    <article>
        <h2> V - Données personnelles et cookies</h2>
        <p>
            Les informations recueillies via les formulaires (comptes utilisateurs, adresses email) 
            sont strictement réservées au fonctionnement le plus basique du projet.
            Aucune donnée n'est cédée à des tiers ni exploitée commercialement ou conservée à toutes fins d'analyses.
        </p>
    </article>
</section>

<?php
        end_page();
    }
}
?>
