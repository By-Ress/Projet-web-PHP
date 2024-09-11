<?php/*


Projet de ORTANCA Baris TD1-TP2 numero etudiant 22003354
Lire le README le rapport de projet.


*/   ?>



<?php include "php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voiture</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="script" href="assets/js/nodeJS.js">
    <link rel="icon" href="/image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "php/nav-links.php" ?>
</header>

<h1><?php echo $Index ['h1'] ?></h1>

<section class="sectionPrincipal">
    <ul class="nav_voiture">
        <li id="MERCEDES-li">
            <img src="image/logoMercedes.png" alt="">
            <a href="dossier/mercedes-benz/mercedes-benz.php?langue=<?= $lang ?>" id="MERCEDES">
                <p>Mercedes-Benz</p>
            </a>
            <img src="image/logoMercedes.png" alt=""></li>
        <li id="BMW-li">
            <img src="image/bmwLogo.png" alt="">
            <a href="dossier/bmw/bmw.php?langue=<?= $lang ?>" id="BMW">
                <p>BMW</p>
            </a>
            <img src="image/bmwLogo.png" alt=""></li>
        <li>
            <img src="image/astonMartinLogo.png" alt="">
            <p>Aston Martine</p>
            <img src="image/astonMartinLogo.png" alt=""</li>
        <li>
            <img src="image/ferrariLogo.png" alt="">
            <p>Ferrari</p>
            <img src="image/ferrariLogo.png" alt=""></li>
        <li>
            <img src="image/mcLarenLogo.png" alt="">
            <p>McLaren</p>
            <img src="image/mcLarenLogo.png" alt=""></li>
    </ul>

</section>

<footer class="footerNav">
    <?php include "php/nav-footers.php" ?>
</footer>

</body>

<script src="assets/js/nodeJS.js"></script>
</html>