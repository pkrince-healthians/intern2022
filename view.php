<?php
    $mysqli = new
    mysqli("astdb001.healthians.co.in:3306","prince_pandey","T8cih4Ue5AJx6D8YIdlVED4r","int004");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        
<br><br>
<center><h2>Details of Registerd Users</h2></center>
    <table align ="center" border="1px" style="width:900px; line-height:30px"> 
        <tr>
            <th colspan="8"><center><h2>Record<h2></center></th>
        </tr>
            <tr>
            <th>Id</th>
            <th>File Info</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact No.</th>
            <th>City</th>
            <th>Gender</th>
            <th>Action</th>
</tr>

<?php
        

               $sql= "select Id, image_path, user_name, user_age, user_add, contact_number, city,gender FROM UserCrm ";
               $result = $mysqli->query($sql);
                while($rows = mysqli_fetch_assoc($result))
                {
        ?>
                    <tr>
    <td><?php echo $rows['Id']; ?></td>
    <td><?php echo $rows['image_path']; ?></td>
    <td><?php echo $rows['user_name']; ?></td>
    <td><?php echo $rows['user_age']; ?></td>
    <td><?php echo $rows['user_add']; ?></td>
    <td><?php echo $rows['contact_number'] ;?></td>
    <td><?php echo $rows['city']; ?></td>
    <td><?php echo $rows['gender']; ?></td>
    <td><a class="btn btn-info" href="update.php?Id=<?= $rows["Id"]; ?>" role="button">Edit</a><?php echo "<br>";?><a class="btn btn-danger" href="delete.php?Id=<?= $rows["Id"]; ?>"role="button">Delete</a></td>
</tr>
<div>
                 
                        

                             
    
                        
</tr>

<?php
}
?>

</table>
<div>
<center>
<left><a href="html.php" class="btn btn-outline-dark" role="button">Redirected To Login</a></left> 
<right><a href="home.php" class="btn btn-outline-dark" role="button">Redirected To Dashboard</a></right></center></div>
</body>
</html>
                       
                            