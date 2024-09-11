<h1>Creation BDD</h1>



<?php

$serveurname = 'localhost';
$username = 'root';
$passeword = 'root';
$dbname = 'myDB';

try {
    $connexion = new PDO("mysql:host=$serveurname",$username,$passeword);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";
    $result = $connexion->query($sql);

    if ($result->rowCount() == 0) {
        $sql = "CREATE DATABASE $dbname";
        $connexion->exec($sql);
        echo 'Base de donner creer';
    } else {
        echo 'Base de donner existe deja';
    }

} catch (PDOException $e) {
    echo "Echec de la connexion :" . $e->getMessage();
}

?>



<a href="../../dossier/admin/admin.php">Base cree revenir en arriere</a>