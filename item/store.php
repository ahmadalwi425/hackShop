<?php 
include "../asset/tool.php";

$id_user = $_POST['id_user'];
$name = $_POST['name'];
$imgname = $_FILES['image']['name'];
$description = $_POST['description'];
$price = $_POST['price'];

move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

mysqli_query($conn,"insert into item values('','$id_user','$name','$description','$imgname','$price')");

header("location:index.php");

?>