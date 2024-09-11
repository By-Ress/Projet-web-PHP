<?php include "../../php/langue/langue.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BMW</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../image/logo.PNG">
</head>

<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>

<section>

    <div id="SERIE-BMW">
        <ul>
            <a href="serie-1.php?langue=<?= $lang ?>">
                <li>
                    <div ><img src="../../image/BMW/bmw-serie-1-1.jpeg" alt="serie-1"></div>
                    <div>
                        <h1>Serie 1</h1>
                        <p>
                            <?php echo $Bmw ['serie-1']; ?>
                        </p>
                    </div>
                </li>
            </a>
            <a href="serie-2.php?langue=<?= $lang ?>">
                <li>
                    <div ><img src="../../image/BMW/bmw-serie-2-1.webp" alt="serie-1"></div>
                    <div>
                        <h1>Serie 2</h1>
                        <p>
                            <?php echo $Bmw ['serie-2']; ?>
                        </p>
                    </div>
                </li>
            </a>
            <a href="serie-3.php?langue=<?= $lang ?>">
                <li>
                    <div><img src="../../image/BMW/bmw-serie-3-1.jpeg" alt="serie-3"></div>
                    <div>
                        <h1>Serie 3</h1>
                        <p>
                            <?php echo $Bmw ['serie-3']; ?>
                        </p>
                    </div>
                </li>
            </a>
            <a href="serie-4.php?langue=<?= $lang ?>">
                <li>
                    <div><img src="../../image/BMW/bmw-serie-4-1.jpeg" alt="serie-4"></div>
                    <div>
                        <h1>Serie 4</h1>
                        <p>
                            <?php echo $Bmw ['serie-4']; ?>
                        </p>
                    </div>
                </li>
            </a>
            <a href="serie-5.php?langue=<?= $lang ?>">
                <li>
                    <div><img src="../../image/BMW/bmw-serie-5-1.jpeg" alt="serie-5"></div>
                    <div>
                        <h1>Serie 5</h1>
                        <p>
                            <?php echo $Bmw ['serie-5']; ?>
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
</body>
</html>