<?php

namespace modules\controllers;

class Nevot_controller {
    public function execute(): void {
        session_start();
        if (isset($_SESSION['email'])) {

            $activites = [
                "Lorem ipsum dolor sit amet",
                "Consectetur adipiscing elit",
                "Sed do eiusmod tempor incididunt",
                "Ut labore et dolore magna aliqua",
                "Lorem ipsum dolor sit amet",
                "Consectetur adipiscing elit",
                "Sed do eiusmod tempor incididunt",
                "Ut labore et dolore magna aliqua",
                "Lorem ipsum dolor sit amet",
                "Consectetur adipiscing elit",
                "Sed do eiusmod tempor incididunt",
                "Ut labore et dolore magna aliqua",
            ];

            $parPage = 5;

            $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

            if ($page < 1) {
                $page = 1;
            }

            $nombrePages = (int) ceil(count($activites) / $parPage);
            if ($nombrePages < 1) {
                $nombrePages = 1;
            }

            if ($page > $nombrePages) {
                $page = $nombrePages;
            }

            $offset = ($page - 1) * $parPage;

            $activitesPage = array_slice($activites, $offset, $parPage);

            (new \modules\views\nevot_view())->show($activitesPage, $page, $nombrePages);
        }
        else {
            header('location: index.php?action=account');
            exit();
        }
    }
}

?>