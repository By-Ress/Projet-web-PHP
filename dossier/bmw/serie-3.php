<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Serie 3</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section aria-label="serie3-slide-foto">

        <div class="slide">
            <img src="../../image/BMW/bmw-serie-3-1.jpeg" alt="serie 3 #1" class="image__slider active">
            <img src="../../image/BMW/bmw-serie-3-2.jpeg" alt="serie 3 #2" class="image__slider">
            <img src="../../image/BMW/bmw-serie-3-3.jpeg" alt="serie 3 #3" class="image__slider">
            <div class="precedent">
                <button><img src="../../image/left-arrow.png" alt="precedent"></button>
            </div>
            <div class="suivant">
                <button><img src="../../image/right-arrow.png" alt="suivant"></button>
            </div>
        </div>
</section>
<section class="serieBMW">
    <div>
        <h1>Serie 3</h1>
        <p>
            <?php echo $Bmw ['serie-3']; ?>
        </p>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>

<script src="../../assets/js/nodeJS.js"></script>

</html>