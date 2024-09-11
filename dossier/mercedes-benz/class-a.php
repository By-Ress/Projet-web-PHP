<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Class A</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section aria-label="classA-slide-foto">

    <div class="slide">
        <img src="../../image/Mercedes/mercedes-class-a-1.jpeg" alt="Class A #1" class="image__slider active">
        <img src="../../image/Mercedes/mercedes-class-a-2.jpeg" alt="Class A #2" class="image__slider">
        <img src="../../image/Mercedes/mercedes-class-a-3.jpeg" alt="Class A #3" class="image__slider">
        <div class="precedent">
            <button><img src="../../image/left-arrow.png" alt="precedent"></button>
        </div>
        <div class="suivant">
            <button><img src="../../image/right-arrow.png" alt="suivant"></button>
        </div>
    </div>
</section>
<section class="classMERCEDES-benz">
    <div>
        <h1>Class A</h1>
        <p>
            <?php echo $Mercedes ['classA']; ?>
        </p>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
<script src="../../assets/js/nodeJS.js"></script>

</html>