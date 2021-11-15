<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  $studentId = $_GET['username-find'];

  $name = "SELECT userName FROM userdetails WHERE user_reg_id = '$studentId'";
  $result1 = mysqli_query($con, $name);

  $contact = "SELECT phoneNumber FROM userdetails WHERE user_reg_id = '$studentId'";
  $result2 = mysqli_query($con, $contact);

  $gname = "SELECT guardianName FROM userdetails WHERE user_reg_id = '$studentId'";
  $result3 = mysqli_query($con, $gname);

  $gcontact = "SELECT guardianContact FROM userdetails WHERE user_reg_id = '$studentId'";
  $result4 = mysqli_query($con, $gcontact);

  $roomNo = "SELECT roomNo FROM userdetails WHERE user_reg_id = '$studentId'";
  $result5 = mysqli_query($con, $roomNo);

  $block = "SELECT block FROM userdetails WHERE user_reg_id = '$studentId'";
  $result6 = mysqli_query($con, $block);

  $email = "SELECT email FROM user WHERE user_reg_id = '$studentId'";
  $result7 = mysqli_query($con, $email);

  $dept = "SELECT dept FROM user WHERE user_reg_id = '$studentId'";
  $result8 = mysqli_query($con, $dept);

  $degree = "SELECT degree FROM user WHERE user_reg_id = '$studentId'";
  $result9 = mysqli_query($con, $degree);
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
    <h1>STUDENT PROFILE</h1>
    <hr>
    <br><br>
    <div class="container">
      <h2>Name: <span><?php
      while($row = mysqli_fetch_assoc($result1)){
        echo $row['userName'];
      }
      ?></span></h2> <br>
      <h2>RegNo.: <span><?php echo $studentId ?></span></h2><br>
      <h2>University Mail ID: <span><?php
      while($row = mysqli_fetch_assoc($result7)){
        echo $row['email'];
      }
      ?></span></h2><br>
      <h2>Contact: <span><?php
      while($row = mysqli_fetch_assoc($result2)){
        echo $row['phoneNumber'];
      }
      ?></span></h2><br>
      <h2>Degree: <span><?php
      while($row = mysqli_fetch_assoc($result9)){
        echo $row['degree'];
      }
      ?></span></h2><br>
      <h2>Department: <span><?php
      while($row = mysqli_fetch_assoc($result8)){
        echo $row['dept'];
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
      <h2>Guardian Name: <span><?php
      while($row = mysqli_fetch_assoc($result3)){
        echo $row['guardianName'];
      }
      ?></span></h2><br>
      <h2>Guardian Contact: <span><?php
      while($row = mysqli_fetch_assoc($result4)){
        echo $row['guardianContact'];
      }
      ?></span></h2><br>
      <br>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
