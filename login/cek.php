<?php 
session_start();
include '../connect/connection.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if($data['id_level']==1){
        $_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = 1;
		header("location:../employee/index.php");
	}else if($data['id_level']==2){
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = 2;
		header("location:../item/index.php");
	}else{
		echo "ID level tidak ditemukan";
    }
}else{
	echo "Username with the same Password is not found";
}
?>