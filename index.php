<?php
include 'database.php';
// check connnection
if (isset($_POST['save'])) {
    $firstname =  $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;

    $sql = "INSERT INTO formtable (fname,lname,email,file) VALUES ('$firstname','$lastname','$email','$filename')";

    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
  }

    if (mysqli_query($conn, $sql)) {
        header("location: display.php");
    } else {
        echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>
<html>

<head>
    <title>Crud Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
<div class="topnavigation">
    <a href="Index.php">Home</a>
    <a href="display.php">Data</a>
    <a href="about.php">Information</a>
    
</div>

<center>
<h2 class="text-info">Crud Operation | Using PHP</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="container">
    <b>Name:</b><input type="text" name="fname" class="form-control" placeholder="Enter First Name" required><br>
   </div>
   <div class="container">
   <b>Last Name:</b><input type="text" name="lname" class="form-control" placeholder="Enter Last Name"  required><br>
  </div>    
  <div class="container">
  <b>E-mail:</b><input type="text" name="email" class="form-control" placeholder="Enter Your Email" required><br>
    </div>    
   <div class="container">
        <b>Image:</b><input type="file" name="uploadfile" id="uploadfile" class="form-control" placeholder="Enter Your Image"  required><br>
      </div>  

       
        <input type="submit" name="save" class="btn btn-primary" value="submit">

    </form>

    </center>
</body>

</html>