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
    ?>
</head>
<body>
    <div class="container">
    
    <table class="table table-hover">
        <thead>
            <tr>
                <style>
                    th,td{
                        text-align: center;
                    }
                </style>
                <th>ID</th>
                <th>username</th>
                <th>Gender</th>
                <th>Id Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = mysqli_query($conn, "SELECT * FROM user ORDER BY id ASC");
                while($result= mysqli_fetch_array($data)){
                    ?>
			<tr>
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['username']; ?></td>
                <td><?php echo $result['gender']; ?></td>
                <td><?php echo $result['id_level']; ?></td>
				<td>
					<a class="btn btn-warning" href="edit.php?id=<?php echo $result['id']; ?>">EDIT</a> 
					<a class="btn btn-danger" href="destroy.php?id=<?php echo $result['id']; ?>">DELETE</a>
				</td>
			</tr>
			<?php 
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <a href="add.php" class="btn btn-primary">Add new user</a>
    <a href="../item/index.php" class="btn btn-primary">Check Item</a>
    </div>
</body>
</html>