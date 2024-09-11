<?php include "../../php/langue/langue.php"; ?>

<?php
// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Votre code de traitement ici

    // Redirection vers la même page
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/contacte.css">
    <link rel="icon" href="../../image/logo.PNG">
    <script src="../../assets/js/nodeJS.js"></script>
</head>


<body>

<header class="nav_header">
    <?php include "../../php/nav-links.php"; ?>
</header>


<section>
    <div class="form_contacte">
        <form name="FormulaireDeContacte" method="POST" action="contact.php" id="FormulaireContacte">
            <label for="name"><?php echo $Contacte['nom']; ?>:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email"><?php echo $Contacte['email']; ?>:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="message"><?php echo $Contacte['message']; ?>:</label>
            <textarea name="message" id="message"></textarea>
            <br>
            <button type="submit"><?php echo $Contacte['envoyer']; ?></button>
        </form>
    </div>


</section>

<section>
    <div>
        <a href="../admin/admin.php" style="margin-left:10px "><h1>ADMIN</h1></a>
    </div>
</section>

<footer class="footerNav">
    <?php include "../../php/nav-footers.php" ?>
</footer>
<script src="../../assets/js/contacte.js"></script>
</body>

</html>
