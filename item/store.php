<?php 
include "../asset/tool.php";
if(isset($_SESSION['id_level'])){
    $_SESSION['danger']="You not have access to visit that site";
    header("Location:../item/index.php");
}
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$imgname = $_FILES['image']['name'];
$description = $_POST['description'];
$price = $_POST['price'];

move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

$res=mysqli_query($conn,"insert into item values('','$id_user','$name','$description','$imgname','$price')");
if($res){
    $_SESSION['status']="new item has added";
}else{
    $_SESSION['danger']="insert data failed";
}
header("location:index.php");

?>