<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
        <div class="wrapper">
        <h1>Welcome to ALKA KONNECT</h1>
        
            <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
     <strong><?php echo $_SESSION['username']; ?><h3>You are Now Registered</h3></strong></p>
    <a href="lg.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
    </body>
    </html>