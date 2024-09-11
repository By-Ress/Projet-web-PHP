<?php
if (array_key_exists('langue', $_GET) && $_GET['langue'] === 'fr') {
    $lang = 'fr';
    include "francais.php";
} else if (array_key_exists('langue', $_GET) && $_GET['langue'] === 'en') {
    $lang = 'en';
    include "anglais.php";
} else {
    $lang = 'fr';
    include "francais.php";
}
?>