<?php 
include "../asset/tool.php";

$id_level = $_POST['id_level'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);



mysqli_query($conn,"insert into user values('','$username','$password','$gender','$id_level')");

header("location:index.php");

?>