<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  $session = $_SESSION['login_user'];

  $name = "SELECT userName FROM userdetails WHERE user_reg_id = '$session'";
  $result1 = mysqli_query($con, $name);

  $roomNo = "SELECT roomNo FROM userdetails WHERE user_reg_id = '$session'";
  $result5 = mysqli_query($con, $roomNo);

  $block = "SELECT block FROM userdetails WHERE user_reg_id = '$session'";
  $result6 = mysqli_query($con, $block);

  $email = "SELECT email FROM user WHERE user_reg_id = '$session'";
  $result7 = mysqli_query($con, $email);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentPro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Student Profile</title>
  </head>
  <body>
    <div class="nav-bar">
      <ul>
        <li style="font-size: 32px;"><a href="https://vtop.vit.ac.in" target="_blank">VTOP</a> </li>
      </ul>
      <ul>
        <li style="font-size: 32px;"><a href="home.php">Home</a></li>
        <li style="font-size: 32px;"><a href="about.php">About VIT</a></li>
        <li style="font-size: 32px;"><a href="roomDetails.php">Room Details</a></li>
        <li style="font-size: 32px;"><a href="roomReg.php">Registration</a></li>
        <li style="font-size: 32px;"><a href="studentPro.php">Profile</a></li>
        <li style="font-size: 32px;"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <h1>STUDENT PROFILE</h1>
    <hr>
    <br>
    <div class="container">
      <h2>Name: <span><?php
      while($row = mysqli_fetch_assoc($result1)){
        echo $row['userName'];
      }
      ?></span></h2> <br>
      <h2>RegNo.: <span><?php echo $session ?></span></h2><br>
      <h2>Mail ID: <span><?php
      while($row = mysqli_fetch_assoc($result7)){
        echo $row['email'];
      }
      ?></span></h2><br>
      <h2>Block: <span><?php
      while($row = mysqli_fetch_assoc($result5)){
        echo $row['roomNo'];
      }
      ?></span></h2>
      <h2>RoomNo.: <span><?php
      while($row = mysqli_fetch_assoc($result6)){
        echo $row['block'];
      }
      ?></span></h2>
      <br>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
