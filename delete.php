<?php 
$conn = mysqli_connect('localhost', 'root', '', 'attendancemng');
include "server.php";
$id = $_GET['id'];
 
$delete="DELETE FROM users WHERE id=$id";
$data=mysqli_query($conn,$delete);
if($data)
{
    mysqli_close($db); // Close connection
    header('location:display.php'); // redirects to all records page
    echo "deleted";
}else
{
    echo "not deleted";
}

?>