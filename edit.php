<?php
$conn = mysqli_connect('localhost', 'root', '', 'attendancemng');
include "server.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string


$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    $edit = mysqli_query($db,"update users set username='$username', password='$password' where id='$id'");
	
    if($edit)
    {
        echo "good";
        mysqli_close($db); // Close connection
        header('location:display.php'); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
<head>
  <title>Login system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="log.css?v=<?php echo time(); ?>">
</head>
<body>
<form method="post" action="">
  <div class="input">
    <h1>Update</h1>
<hr>
    <?php include('errors.php'); ?>
    <div class="input-group">
       
        <input type="username" name="username" placeholder ="User Name">
    </div>
    <div class="input-group">
       
        <input type="password" name="password" placeholder="Password">
    </div>
    <div class="input-group">
        <button class="btn" name="update" >Update</button>
    </div>
   
  </form>
</div>
</body>
</html>