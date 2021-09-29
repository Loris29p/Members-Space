<?php 
    session_start();

    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    setcookie('email', '');
    setcookie('pseudo', '');
    setcookie('id', '');
    setcookie('avatar', '');
    setcookie('connect_auto', '');

    header('Location: index.php');
?>