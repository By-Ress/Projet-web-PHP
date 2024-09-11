<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Serie 2</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section aria-label="serie2-slide-foto">

        <div class="slide">
            <img src="../../image/BMW/bmw-serie-2-1.webp" alt="serie 2 #1" class="image__slider active">
            <img src="../../image/BMW/bmw-serie-2-2.webp" alt="serie 2 #2" class="image__slider">
            <img src="../../image/BMW/bmw-serie-2-3.jpeg" alt="serie 2 #3" class="image__slider">
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
        <h1>Serie 2</h1>
        <p>
            <?php echo $Bmw ['serie-2']; ?>
        </p>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>

<script src="../../assets/js/nodeJS.js"></script>

</html>