<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "mydb";
$conn = mysqli_connect("localhost", "root", "", "dbform");
if (!$conn) {
    die("error: " . mysqli_connect_error());
}
?>