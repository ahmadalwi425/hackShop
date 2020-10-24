<?php 
include "../asset/tool.php";
if(isset($_SESSION['id_level'])){
    $_SESSION['danger']="You not have access to visit that site";
    header("Location:../item/index.php");
}
$id = $_POST['id'];
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$imgname = $_FILES['image']['name'];
$description = $_POST['description'];
$price = $_POST['price'];

move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

$res=mysqli_query($conn,"update item set name='$name', imgname='$imgname', description='$description',price='$price' where id='$id'");
if($res){
    $_SESSION['status']="Item data has edited";
}else{
    $_SESSION['danger']="edit data failed";
}
header("location:index.php");

?>