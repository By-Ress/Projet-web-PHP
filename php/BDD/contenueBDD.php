<?php include "../../php/langue/langue.php"; ?>

<?php //Connexion avec la BDD.
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
}

$reponse = $connect->query('SELECT * FROM users');

?>

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


<section class="SectionDeContenue">
    <table>

        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Mail</td>
            <td>Message</td>


            <?php

            while ($donnees = mysqli_fetch_array($reponse))
            {
            ?>
        <tr>
            <td id="ID_BDD"><?php echo $donnees['id']; ?></td>
            <td id="NOM_BDD"><?php echo $donnees['nom']; ?></td>
            <td id="MAIL_BDD"><?php echo $donnees['mail']; ?></td>
            <td id="MESSAGE_BDD"><?php echo $donnees['message']; ?></td>

        </tr>
        <?php
        }
        ?>
    </table>
</section>

<section>
    <div>
        <a href="../../dossier/admin/admin.php">Pour revenir Sur la page admin.</a>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
</body>
</html>