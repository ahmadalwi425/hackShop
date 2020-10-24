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
		$_SESSION['status']="Log in succesfull";
		header("location:../employee/index.php");
	}else if($data['id_level']==2){
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = 2;
		$_SESSION['status']="Log in succesfull";
		header("location:../item/index.php");
	}else{
		echo "ID level tidak ditemukan";
    }
}else{
	$un=mysqli_query($conn,"select * from user where username='$username'");
	$cek2 = mysqli_num_rows($un);
	if($cek2>0){
		$_SESSION['danger']="Your password is wrong";
		header("location:login.php");
	}else{
		$_SESSION['danger']="Username not found";
		header("location:login.php");
	}
}
?>