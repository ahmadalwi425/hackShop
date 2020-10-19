<?php 
include "../asset/tool.php";

$id = $_POST['id'];
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$imgname = $_FILES['image']['name'];
$description = $_POST['description'];
$price = $_POST['price'];

move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

mysqli_query($conn,"update item set name='$name', imgname='$imgname', description='$description',price='$price' where id='$id'");

header("location:index.php");

?>