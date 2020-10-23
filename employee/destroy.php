<?php 

include '../asset/tool.php';

$id = $_GET['id'];

$res=mysqli_query($conn,"delete from user where id='$id'");
if($res){
    $_SESSION['status']="Employee has beeen removed";
}else{
    $_SESSION['danger']="delete data failed";
}
header("location:index.php");

?>