<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "title.php";
    include "../asset/tool.php";
    if($sil!=1){
        $_SESSION['danger']="You not have access to visit that site";
        header("Location:../item/index.php");
    }
    $data=mysqli_query($conn, "SELECT * FROM level");
    ?>
</head>
<body>
    <div class="container">
        <div class="col-md-3">

        </div>
            <form action="store.php" method="post" class="form-horizontal col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center>Log-In</center>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control col-md-8" id="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
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
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id_level">Level</label>
                            <div class="col-sm-10">
                                <select name="id_level" class="form-control col-md-8" id="id_level">
                                    <?php
                                    while($result= mysqli_fetch_array($data)){
                                        ?>
                                        <option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
                                        <?php
                                    }
                                    ?>
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