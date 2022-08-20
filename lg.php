<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="log.css?v=<?php echo time(); ?>">
</head>
<body>
<form method="post" action="lg.php">
  <div class="input">
    <h1>Login</h1>
<hr>
    <?php include('errors.php'); ?>
    <div class="input-group">
       
        <input type="email" name="email" placeholder ="Email">
    </div>
    <div class="input-group">
       
        <input type="password" name="password" placeholder="Password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>
</body>
</html>