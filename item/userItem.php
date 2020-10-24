<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "title.php";
    include '../asset/tool.php';
    if(!isset($_SESSION['id'])){
        $_SESSION['danger']="You not have access to visit that site";
        header("Location:../item/index.php");
    }
    ?>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            List Item
        </div>
        <div class="panel-body">
            <?php
                
                $data = mysqli_query($conn, "SELECT * FROM item where id_user='$sid'");
                while($result= mysqli_fetch_array($data)){
                    ?>
                    <div class="col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $result['name']; ?>
                            </div>
                            <div class="panel-body">
                            <?php echo "<img src='image/".$result['imgname']."' width='100px' height='100px'/>"; ?>
                            </div>
                            <div class="panel-footer">
                                Rp. <?php echo $result['price']; ?>
                                <a class="btn btn-warning" href="editItem.php?id=<?php echo $result['id']; ?>">EDIT</a> 
					            <a class="btn btn-danger" href="destroy.php?id=<?php echo $result['id']; ?>">DELETE</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    
    <br><br>
    <a href="addItem.php" class="btn btn-primary">Add new item</a>
    </div>
</body>
</html>