<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];$_SESSION['prenoms'][] = $prenom;
}
if (isset($_SESSION['prenoms'])) {
    echo "Liste des prénoms : ";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . " ";
    }
}
?> 