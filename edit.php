<?php
include 'database.php';

$id = $_GET['id'];

$qry = mysqli_query($conn, "SELECT * FROM formtable WHERE id = '$id' ");
$data = mysqli_fetch_array($qry);

if(isset($_POST['edit'])){
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $email = $_POST['email'];
    $file = $_POST['file'];
    $sql = mysqli_query($conn, "UPDATE formtable SET fname = '$fname', lname ='$lname', email ='$email', file = '$file' WHERE id = '$id'");

    if($sql){
        
        header('location: display.php');
        // echo "update here";
    }else{
        echo "error: " .mysqli_error($sql);
    }

}
?>  
<html>
<head>
    <title>Update page</title>
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
    <a href="">about us</a>
    
</div>
<center>
<h2>Update Here</h2>
<form action="" method="post">

    <div class="container">
    <b>Name:</b><input type="text" name="fname" class="form-control" value="<?php echo $data['fname']; ?>" /><br>
        </div>
        <div class="container">
        <b>last name:</b><input type="text" name="lname" class="form-control" value="<?php echo $data['lname']; ?>" /><br>
        </div>
        <div class="container">
        <b>E-mail:</b><input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" /><br>
        </div>
        <div class="container">
        <b>Image:</b><input type="file" name="file" class="form-control" value="<?php echo $data['file']; ?>" /><br>
        </div>
     
        
        <input type="submit" name="edit" class="btn btn-primary" value="Update">
</form>
</center>

</body>
</html>

