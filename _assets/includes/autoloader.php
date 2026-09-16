<php

    function my_autoload(string $class): void {
    include __DIR__ . '/' . $class . '.php’;
    }
    spl_autoload_register('my_autoload');
    $obj = new \Class();

?>