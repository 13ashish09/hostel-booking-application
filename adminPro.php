<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  $session = $_SESSION['login_user'];

  $name = "SELECT fullName FROM admin WHERE adminId = '$session'";
  $result1 = mysqli_query($con, $name);

  $email = "SELECT emailId FROM admin WHERE adminId = '$session'";
  $result2 = mysqli_query($con, $email);

  $wardenOf = "SELECT wardenOf FROM admin WHERE adminId = '$session'";
  $result4 = mysqli_query($con, $wardenOf);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentPro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Admin Profile</title>
  </head>
  <body>
    <div class="nav-bar">
      <ul>
        <li style="font-size: 28px;"><a href="https://vtop.vit.ac.in" target="_blank">VTOP</a> </li>
      </ul>
      <ul>
        <li style="font-size: 28px;"><a href="home-admin.php">Home</a></li>
        <li style="font-size: 28px;"><a href="change-about.php">Change About</a></li>
        <li style="font-size: 28px;"><a href="change-update.php">Change Updates</a></li>
        <li style="font-size: 28px;"><a href="studentDetails.php">Student Details</a></li>
        <li style="font-size: 28px;"><a href="adminPro.php">Profile</a></li>
        <li style="font-size: 28px;"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <h1>ADMIN PROFILE</h1>
    <hr>
    <br><br><br><br><br><br><br>
    <div class="container">
      <h2>Name: <span><?php
      while($row = mysqli_fetch_assoc($result1)){
        echo $row['fullName'];
      }
      ?></span></h2> <br>
      <h2>Email: <span><?php
      while($row = mysqli_fetch_assoc($result2)){
        echo $row['emailId'];
      }
      ?></span></h2><br>
      <h2>Admin ID: <span><?php echo $session; ?></span></h2><br>
      <h2>Warden of: <span><?php
      while($row = mysqli_fetch_assoc($result4)){
        echo $row['wardenOf'];
      }
      ?></span></h2><br>
      <br>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
