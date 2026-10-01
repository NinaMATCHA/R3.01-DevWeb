<?php

namespace modules\controllers;

class account_controller {
    public function execute(): void {
        (new \modules\views\account_view())->show();
    }
}

?>