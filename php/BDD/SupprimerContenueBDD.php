


<?php include "../../php/langue/langue.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/contacte.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>


<section>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    $sql = "DELETE FROM users WHERE id";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement supprimé avec succés";
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }

    $conn->close();

    ?>

</section>

<div>
    <a href="../../dossier/admin/admin.php">Pour revenir Sur la page admin.</a>
</div>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
</html>
