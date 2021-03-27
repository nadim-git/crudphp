<?php
include 'database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display Data</title>
</head>

<body>
<div class="topnavigation">
    <a href="Index.php">Home</a>
    <a href="display.php">Data</a>
    
    
</div>
    <div class="container mt-3">
        <div class="row">
                
                <h3 class="text-center text-primary">Show Data | Crud Operation</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">file</th>
                            <th scope="col">Handle Here</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT id,fname,lname,email,file FROM formtable";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $x = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $x;
                                                    $x++;  ?></th>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><img src='<?php echo 'image/'.$row['file']; ?>' width="150" height="120" ></td>
                                    <td>
                                    <a href='edit.php?id=<?php echo $row['id'];?>' class="btn btn-primary">Edit</a>
                                     <a href='delete.php?id=<?php echo $row['id']; ?>' class="btn btn-danger">Delete</a>
                                     </td>
                                </tr>
                        <?php

                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>