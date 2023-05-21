<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_POST['reset'])) {
    // Réinitialiser le compteur de visites
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}

echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>