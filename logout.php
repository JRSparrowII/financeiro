<?php 
    session_start();
    unset($_SESSION["portal_usuario"]);
    header("Location: login.php");
?>