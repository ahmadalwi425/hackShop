<?php 

include '../asset/tool.php';
if($sil!=1){
    $_SESSION['danger']="You not have access to visit that site";
    header("Location:../item/index.php");
}
$id = $_GET['id'];

$res=mysqli_query($conn,"delete from user where id='$id'");
if($res){
    $_SESSION['status']="Employee has beeen removed";
}else{
    $_SESSION['danger']="delete data failed";
}
header("location:index.php");

?>