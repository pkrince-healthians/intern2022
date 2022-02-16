<?php
    $mysqli = new
    mysqli("astdb001.healthians.co.in:3306","prince_pandey","T8cih4Ue5AJx6D8YIdlVED4r","int004");
    $Id=$_GET['Id'];
$sql="select Id, image_path, user_name, user_age, user_add, contact_number, city, gender FROM UserCrm WHERE 'Id'='$Id'";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_assoc($result);
$image_path=$_FILES['image_path'];
print_r($image_path);
$user_name=$_POST['user_name'];
$user_age=$_POST['user_age'];
$user_add=$_POST['user_add'];
$contact_number=$_POST['contact_number'];
$city=$_POST['city'];
$gender=$_POST['gender'];

if(isset($_POST['submit']))
{
    $image_path=$_FILES['image_path'];
    $user_name=$_POST['user_name'];
    $user_age=$_POST['user_age'];
    $user_add=$_POST['user_add'];
    $contact_number=$_POST['contact_number'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];

    $sql="UPDATE UserCrm SET image_path='$image_path',user_name='$user_name', user_age='$user_age',user_add='$user_add', contact_number='$contact_number',city='$city', gender='$gender' 
    where Id=$Id";

    $result=mysqli_query($mysqli,$sql);

    if($result)
    {
        // echo "Updated Successfully";
        header("location:view.php");
    }
    else{
        die(mysqli_error($mysqli));
    }
}

    ?>
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <center><h1>User Update Form</h1></center>
    
<body>
<div class="container">    
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="user_name">
  </div>
  <div class="col-md-6">
    <label for="inputage" class="form-label">Age</label>
    <input type="text" class="form-control" id="inputage" name="user_age">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter address" name="user_add" value=<?php echo $user_add;?>>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone NO." name="contact_number"value=<?php echo $contact_number;?>>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" value=<?php echo $city;?>> 
  </div>

  <div>
    <label for="gender">Gender:</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">Male</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">Female</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="T">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div><br>
<div>
    Select Image File to Upload:
    <input type="file" name="user_image">
</div><br>
<div class="col-12">
<button type="submit" class="btn btn-primary" name="submit">Update</button>
</div>
</form>
</div>
    
</body>
<script>

</script>

</html>