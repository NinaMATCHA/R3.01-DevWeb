<php 

function databaseConnection() {
   try {
    $dsn = 'mysql:host=mysql-ninamc.alwaysdata.net;dbname=ninamc_bdd';
    $pdo = new \PDO($dsn, 'ninamc','NevotLe+Fortdu13');
    $pdo->exec('SET CHARACTER SET utf8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) { die('Connection impossible : ' . $e->getMessage());}

}

?>