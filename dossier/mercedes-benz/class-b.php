<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Class B</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section aria-label="classE-slide-foto">

        <div class="slide">
            <img src="../../image/Mercedes/mercedes-class-b-1.jpeg" alt="Class B #1" class="image__slider active">
            <img src="../../image/Mercedes/mercedes-class-b-2.webp" alt="Class B #2" class="image__slider">
            <img src="../../image/Mercedes/mercedes-class-b-3.jpeg" alt="Class B #3" class="image__slider">
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
        <h1>Class B</h1>
        <p>
            <?php echo $Mercedes ['classB']; ?>
        </p>
    </div>
</section>



<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
<script src="../../assets/js/nodeJS.js"></script>

</html>