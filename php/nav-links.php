<ul id="NAV-LINKS">
    <li>
        <a href="/index.php?langue=<?= $lang?>"><img src="/image/logo.PNG" alt="logo de voiture" id="logo"></a>
    </li>
    <li>
        <a href="/index.php?langue=<?= $lang?>" id="acceuil">Acceuil</a>
    </li>
    <li id="BARRE_LANGUE">
        <a href="?langue=fr"><img src="/image/head/french_flag.png" alt="icon" id="FR"></a>
        <a href="?langue=en"><img src="/image/head/english_flag.png" alt="icon" id="EN"></a>
    </li>
    <li>
        <div id="dateActuelle">
            <?php echo date("d/m/y H:i")    ?>
        </div>
    </li>
</ul>




