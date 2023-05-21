<?php
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    $nbvisites = $_COOKIE['nbvisites'];
}
if (isset($_POST['reset'])) {
    $nbvisites = 0;
} else {
    $nbvisites++;
}

setcookie('nbvisites', $nbvisites, time() + 3600); // Le cookie expire dans 1 heure

echo "Nombre de visites : " . $nbvisites;
?>