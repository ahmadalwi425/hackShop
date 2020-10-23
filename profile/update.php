<?php 
include "../asset/tool.php";

$id = $sid;
$username = $_POST['username'];
$gender = $_POST['gender'];

mysqli_query($conn,"update user set username='$username', gender='$gender' where id='$id'");

header("location:index.php");

?>