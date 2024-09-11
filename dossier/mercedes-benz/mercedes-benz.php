<?php include "../../php/langue/langue.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mercedes-Benz</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section>

    <div id="CLASS_MERCEDES">
        <ul>
            <a href="class-a.php?langue=<?= $lang ?>">
                <li>
                    <img src="../../image/Mercedes/mercedes-class-a-1.jpeg"
                         alt="mercedes-class-a">
                    <div>
                        <h1>Class A</h1>
                        <p>
                            <?php echo $Mercedes ['classA'] ?>
                        </p>
                    </div>

                </li>
            </a>
            <a href="class-b.php?langue=<?= $lang ?>">
                <li>
                    <img src="../../image/Mercedes/mercedes-class-b-1.jpeg"
                         alt="mercedes-class-a">
                    <div>
                        <h1>Class B</h1>
                        <p>
                            <?php echo $Mercedes ['classB'] ?>
                        </p>
                    </div>
                </li>
            </a>
            <a href="class-c.php?langue=<?= $lang ?>">
                <li>
                    <img src="../../image/Mercedes/mercedes-class-c-1.webp"
                         alt="mercedes-class-a">
                    <div>
                        <h1>Class C</h1>
                        <p>
                            <?php echo $Mercedes ['classC'] ?>
                        </p>
                    </div>

                </li>
            </a>
            <a href="class-e.php?langue=<?= $lang ?>">
                <li>
                    <img src="../../image/Mercedes/mercedes-class-e-1.jpeg"
                         alt="mercedes-class-e">
                    <div>
                        <h1>Class E</h1>
                        <p><?php echo $Mercedes ['classE'] ?>
                        </p>
                    </div>
                </li>
            </a>

        </ul>
    </div>


</section>
<section>


</section>


<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script type="text/javascript" src="../../assets/js/nodeJS.js"></script>
</body>
</html>