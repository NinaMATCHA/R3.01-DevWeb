<?php

    function my_autoload(string $class): void {
        $racine = __DIR__ . '/../../';
        $chemin = $racine . str_replace('\\', '/', $class) . '.php';
        
        if (file_exists($chemin)) {
            require $chemin;
        }
    }
    
    spl_autoload_register('my_autoload');
?>