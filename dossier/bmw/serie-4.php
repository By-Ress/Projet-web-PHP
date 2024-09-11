<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Serie 4</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section aria-label="serie4-slide-foto">

        <div class="slide">
            <img src="../../image/BMW/bmw-serie-4-1.jpeg" alt="serie 4 #1" class="image__slider active">
            <img src="../../image/BMW/bmw-serie-4-2.webp" alt="serie 4 #2" class="image__slider">
            <img src="../../image/BMW/bmw-serie-4-3.webp" alt="serie 4 #3" class="image__slider">
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
        <h1>Serie 4</h1>
        <p>
            <?php echo $Bmw ['serie-4']; ?>
        </p>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
<script src="../../assets/js/nodeJS.js"></script>

</html>