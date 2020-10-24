<?php 
include "../asset/tool.php";
if($sil!=1){
    $_SESSION['danger']="You not have access to visit that site";
    header("Location:../item/index.php");
}
$id = $_POST['id'];
$username = $_POST['username'];
$gender = $_POST['gender'];

$res=mysqli_query($conn,"update user set username='$username', gender='$gender' where id='$id'");
if($res){
    $_SESSION['status']="Employee data has edited";
}else{
    $_SESSION['danger']="edit data failed";
}
header("location:index.php");

?>