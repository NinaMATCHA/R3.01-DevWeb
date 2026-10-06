<?php

namespace modules\views;

class nevot_view {

    public function show(
        array $activites,
        int $page,
        int $nombrePages): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();
?>

<header>
    <h1>NEVOT</h1>
</header>

<div class="card">
    <h2>Activités</h2>
    <?php foreach ($activites as $activite): ?>
        <div class="activite">
            <?= htmlspecialchars($activite) ?>
        </div>
    <?php endforeach; ?>

    <?php if ($page > 1): ?>
        <a href="?action=nevot&page=<?= $page - 1 ?>">←</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $nombrePages; $i++): ?>
        <a href="?action=nevot&page=<?= $i ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $nombrePages): ?>
        <a href="?action=nevot&page=<?= $page + 1 ?>">→</a>
    <?php endif; ?>

</div>


<?php
        (new \modules\views\Layout('Nevot', ob_get_clean()))->show();
    }
}
?>