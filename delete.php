<?php
$id = $_GET['id'];

include 'database.php';
    $sql = "DELETE FROM formtable WHERE id =" .$id;
if (mysqli_query($conn, $sql)) {
    header('location: display.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>

