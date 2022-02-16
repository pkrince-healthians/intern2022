<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">  Register System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">Detail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index1.php">Logout</a>
      </li>
    </nav>
    <center><h1>ENTER YOUR DETAILS HERE:</h1></center>
<div class="container">    
<form action="upload.php" class="row g-3" method="POST" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter address" name="user_add">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone NO." name="contact_number">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>

  <div>
    <label for="gender">Gender:</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">Male</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">Female</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="T">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
<div>
    Select Image File to Upload:
    <input type="file" name="user_image">
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
    
</body>
<script>

</script>

</html>