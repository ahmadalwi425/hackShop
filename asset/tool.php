<?php
session_start();
include '../connect/connection.php';
echo '<link rel="stylesheet" href="../asset/css/bootstrap.css">
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<script src="../asset/js/bootstrap.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>';
$sid=$_SESSION['id'];
$sus=$_SESSION['username'];
$sil=$_SESSION['id_level'];
if($sil==1){
    echo '
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Hack Shop</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="../employee/index.php">User</a></li>
            <li><a href="../item/index.php">Item</a></li>
            <li><a href="../item/userItem.php">Your Item</a></li>
            <li><a href="../profile/index.php">Your Profile</a></li>
            </ul>
        </div>
    </nav>';
}else{
    echo '
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Hack Shop</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../item/index.php">Item</a></li>
            <li><a href="../item/userItem.php">Your Item</a></li>
            <li><a href="../profile/index.php">Your Profile</a></li>
            </ul>
        </div>
    </nav>';
}

?>