<?php
session_start();
include '../connect/connection.php';
echo '<link rel="stylesheet" href="../asset/css/bootstrap.css">
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="../asset/css/style.css">
<script src="../asset/js/jquery-3.5.1.slim.min.js"></script>
<script src="../asset/js/bootstrap.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>';
if(isset($_SESSION['id'])){
    $sid=$_SESSION['id'];
    $sus=$_SESSION['username'];
    $sil=$_SESSION['id_level'];
    if($sil==1){
        echo '
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Hack Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li class = "nav-link"><a href="../employee/index.php">User</a></li>
                <li class = "nav-link"><a  href="../item/index.php">Item</a></li>
                <li class = "nav-link"><a href="../item/userItem.php">Your Item</a></li>
                <li class = "nav-link"><a href="../profile/index.php">Your Profile</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="pull-right"><a href="../login/logout.php">Logout</a></li>
            </ul>
            </div>
        </nav>';
    }else if($sil==2){
        echo '
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Hack Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li class = "nav-link"><a href="../item/index.php">Item</a></li>
                <li class = "nav-link"><a href="../item/userItem.php">Your Item</a></li>
                <li class = "nav-link"><a href="../profile/index.php">Your Profile</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="pull-right"><a href="../login/logout.php">Logout</a></li>
            </ul>
            </div>
        </nav>';
    }
}else{
    echo '
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../login/login.php">Hack Shop</a>
        </div>
        <ul class="nav navbar-nav">
            <li  class = "nav-link "><a href="../item/index.php">Item</a></li>
            </ul>
        </div>
    </nav>';
}

if(isset($_SESSION['status'])){
    ?>
    <div class="container">
        <div class="alert alert-success alert-dismissible  fade in" role="alert">            
            <strong>Success!</strong> <?php echo $_SESSION['status']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>        
        </div>
    </div>
    
    <?php
    unset($_SESSION["status"]);
}else if(isset($_SESSION['danger'])){
    ?>
    <div class="container">
        <div class="alert alert-danger alert-dismissible  fade in">    
            <strong>Oops! </strong> <?php echo $_SESSION['danger']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>   
        </div>
    </div>
    
    <?php
    unset($_SESSION["danger"]);
}
if(isset($_SESSION['logout'])){
    ?>
    <div class="container">
        <div class="alert alert-warning alert-dismissible  fade in">
            <strong>Success!</strong> <?php echo $_SESSION['logout']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>           
        </div>
    </div>
    
    <?php
}

?>
