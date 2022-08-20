<?php 
  session_start(); 

 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: lg.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: lg.php");
  }
?>
<!DOCTYPE html>
<html>
<body style="background-color:silver">
<head>
	<title>
		Usama's Collection
	</title>
	<link rel="stylesheet" type="text/css" href="Usama Ahmed.css">
	
</head>
<body>
 <div class="topnav a">
 <a class= "navbar-brand" href="">
      
    <img src="1.jpg" class="img-fluid" align="right">
     <br>
</a>
<br>
	<a href="">Home</a>
  	<a href="">Medicines</a>
  	<a href="">Personal Care</a>
  	<a href="">Baby Care</a>
  	<a href="">Offers%</a>
       	<input type="text" placeholder="Search..">
         <a href="lg.php?logout='1'" style="color: red;">logout</a> </p>
 </div>

  <div class="hero-image">
  <div class="hero-text">
  

  </div>
</div> 
<br><br>

<h1>ABOTT</h1>
<div class="row">
  <div class="column">
    <img src="abott1.jpg" width="295px" height="300px">
    <img src="abott2.jpg"  width="295px" height="300px">
    <img src="abott3.jpg"  width="295px" height="300px">
    <img src="abott4.jpg"  width="295px" height="300px">
    <img src="abott5.jpg"  width="305px" height="300px">
  </div>

  <h1>Hilton Pharma</h1>
<div class="row">
  <div class="column">
    <img src="hilton (1).jpg" width="295px" height="300px">
    <img src="hilton (1).png"  width="295px" height="300px">
    <img src="hilton (1).webp" width="295px" height="300px">
    <img src="hilton (2).png"  width="295px" height="300px">
    <img src="hilton (2).webp"  width="305px" height="300px">
  </div>

  <h1>Getz Pharma</h1>
<div class="row">
  <div class="column">
    <img src="getz (1).jpg" width="295px" height="300px">
    <img src="getz (1).jpg"  width="295px" height="300px">
    <img src="getz (1).webp" width="295px" height="300px">
    <img src="getz (2).jpg"  width="295px" height="300px">
    <img src="getz (3).JPG"  width="305px" height="300px">
  </div>

  <h1>GSK Pharma</h1>
<div class="row">
  <div class="column">
    <img src="gsk (1).jpg" width="295px" height="300px">
    <img src="gsk (1).png"  width="295px" height="300px">
    <img src="gsk (2).png" width="295px" height="300px">
    <img src="gsk (2).jpg"  width="295px" height="300px">
    <img src="gsk (3).jpg"  width="305px" height="300px">
  </div>

  <div class="footer-menu">
    <ul class="f-menu">
       <li><a href="">Home</a></li>
       <li><a href="">Medicines</a></li>
       <li><a href="">Personal Care</a></li>
       <li><a href="">Baby Care</a></li>
       <li><a href="">Offers%</a></li>
    </ul>
   </div>
  
   <div class="footer"> 
    
  <p>Copyright @Usama Ahmed</p>
</div>
</body>
</html>