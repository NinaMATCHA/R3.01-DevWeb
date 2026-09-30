<?php

namespace modules\views;

class nevot_view {
<<<<<<< HEAD
    public function show(): void {
        session_start();
        if (isset($_SESSION['email'])) {
            require '_assets/utils/utils.inc.php';
            start_page("Nevot");
=======
    public function show(): void
    { // PSR-12 : Accolade à la ligne pour la méthode
        ob_start();
        
>>>>>>> f6a8f7dc5fd785e9ac5af08634f2be30c2e65b45
?>

<main>
        <div class="card">
            <h1>NEVOT PHP MASTER LVL 1000000000  !</h1>
        </div>
</main>

<?php
<<<<<<< HEAD
            end_page();
        }
        else {
            header("location:index.php?action=login");
            exit();
        }
=======
        (new \modules\views\layout('Nevot', ob_get_clean()))->show();
>>>>>>> f6a8f7dc5fd785e9ac5af08634f2be30c2e65b45
    }
}
?>