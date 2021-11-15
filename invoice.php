<?php

  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/successSign.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Invoice Successful</title>
  </head>
  <body>
    <h1>VHostel</h1>
    <hr>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <h2>INVOICE GENERATED SUCCESSFULLY!</h2><br>
      <br>
      <h3>Check Under Online Payments Section on <a href="https://vtop.vit.ac.in">VTOP</a></h3><br>
      <h3>Go to <a href="home.php">Home Page</a></h3>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
