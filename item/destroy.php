<?php 

include '../asset/tool.php';

$id = $_GET['id'];

$res=mysqli_query($conn,"delete from item where id='$id'");
if($res){
    $_SESSION['status']="Item has beeen removed";
}else{
    $_SESSION['danger']="delete data failed";
}
header("location:index.php");

?>