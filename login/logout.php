<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['id']);
unset($_SESSION['id_level']);
session_destroy();
header("Location:login.php");
?>