<?php 
include_once("database/connect.php");
    unset($_SESSION['user']);
    header("Location: index.php");
?>
