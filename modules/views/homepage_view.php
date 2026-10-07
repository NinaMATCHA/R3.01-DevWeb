<?php

namespace modules\views; /* Toujours en premier */

class homepage_view {
    public function show(): void {
        session_start();
        ob_start();
?>

<header>
    <span class="small">BIENVENUE SUR</span>
    <h1>Matheopolis</h1>
</header>

    <div class="card">
    <p>
        Le site qui donne vie aux livres racontant l'histoire de l'héroïne Laurence Guerney,
        ce superbe projet de fiction créé par l'association "Maths pour tous".
    </p>
    </div>

    <div class="card parchment">
    <p>
        Notre site vise à donner plus de visibilité sur Matheopolis mais surtout à aider les créateurs à viser plus de collégiens ainsi que
        de lycéens pour les aider en mathématiques mais aussi pour rendre celles-ci vivantes, concrètes et accessibles à travers une très grande
        aventure.
    </p>
</div>

<?php
        (new \modules\views\Layout('Bienvenue', ob_get_clean()))->show();
    }
}
?>