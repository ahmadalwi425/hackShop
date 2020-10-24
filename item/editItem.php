<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "title.php";
    include "../asset/tool.php";
    $id = $_GET['id'];
    $data = mysqli_query($conn,"select * from item where id='$id'");
    $result = mysqli_fetch_array($data);
    ?>
</head>
<body>
    <div class="container">
        <div class="col-md-3">

        </div>
            <form action="updateItem.php" method="post" class="form-horizontal col-md-6" enctype="multipart/form-data">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center>Input Item</center>
                    </div>
                    <div class="panel-body">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['id']; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control col-md-8" id="name" placeholder="name" value="<?php echo $result['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control col-md-8" id="image" placeholder="your file name" require>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="decription">description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" id="description" placeholder="Enter description" value="<?php echo $result['description']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="decription">Price</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price" value="<?php echo $result['price']; ?>">
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