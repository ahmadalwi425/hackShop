<?php 
include "../asset/tool.php";
if($sil!=1){
    $_SESSION['danger']="You not have access to visit that site";
    header("Location:../item/index.php");
}
$id_level = $_POST['id_level'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);



$res=mysqli_query($conn,"insert into user values('','$username','$password','$gender','$id_level')");
if($res){
    $_SESSION['status']="new employee has added";
}else{
    $_SESSION['danger']="insert data failed";
}

header("location:index.php");

?>