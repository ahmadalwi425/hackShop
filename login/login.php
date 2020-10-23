<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <?php
    include "../asset/tool.php";
    ?>
</head>
<body>
    <div class="container">
        <br><br><br><br><br>
        <div class="col-md-3">

        </div>
            <form action="cek.php" method="post" class="form-horizontal col-md-6">
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
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        <div class="col-md-3">
            
        </div>
    </div>
</body>
</html>