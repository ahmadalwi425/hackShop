<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "title.php";
    include "../asset/tool.php";
    $id = $_GET['id'];
    $data = mysqli_query($conn,"select * from user where id='$id'");
    $result = mysqli_fetch_array($data);
    if($sil!=1){
        $_SESSION['danger']="You not have access to visit that site";
        header("Location:../item/index.php");
    }
    ?>
</head>
<body>
    <div class="container">
        <div class="col-md-3">

        </div>
            <form action="update.php" method="post" class="form-horizontal col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center>Log-In</center>
                    </div>
                    <div class="panel-body">
                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control col-md-8" id="username" placeholder="Username" value="<?php echo $result['username'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="genderd">Gender</label>
                            <div class="col-sm-10">
                                <select name="gender" class="form-control col-md-8" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        <div class="col-md-3">
            
        </div>
    </div>

</body>
</html>