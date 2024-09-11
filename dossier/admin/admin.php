<?php include "../../php/langue/langue.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>


<section>
    <div>
        <a href="../../php/BDD/BDDcree.php"><p>Pour cree BDD si pas deja cree !</p></a>
    </div>
    <div>
        <a href="../../php/BDD/BDDcreeListe.php"><p>Pour cree liste pour BDD !</p></a>
    </div>
    <div>
        <a href="../../php/BDD/contenueBDD.php"><p>Pour afficher le contenue de la BDD</p></a>
    </div>
    <div>
        <a href="../../php/BDD/SupprimerContenueBDD.php"><p>Pour supprimer le contenue de la BDD</p></a>
    </div>

</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
</html>