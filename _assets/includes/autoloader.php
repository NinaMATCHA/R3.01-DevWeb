<?php

    class Autoloader {
        public static function register() {
            spl_autoload_register(function ($class) {
                $fichier = str_replace('\\', '/', $class) . '.php';
                if (file_exists($fichier)) {
                    require_once $fichier;
                    return true;
                }
                return false;
            });
        }
    }
    Autoloader::register();
?>