<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

    $update1 = "SELECT update1 from updates where updateId = 1";
    $result1 = mysqli_query($con, $update1);

    $update2 = "SELECT update2 from updates where updateId = 1";
    $result2 = mysqli_query($con,$update2);

    $update3 = "SELECT update3 from updates where updateId = 1";
    $result3 = mysqli_query($con,$update3);

    $update4 = "SELECT update4 from updates where updateId = 1";
    $result4 = mysqli_query($con,$update4);

    if(!$result1 || !$result2 || !$result3 || !$result4) {
      echo "Error: ".mysqli_error($con);
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta charset="utf-8">
    <title>VHostel - Home</title>
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
    <div class="container">
      <div class="left">
        <h2>New Updates:</h2><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result1)){
          echo $row['update1'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result2)){
          echo $row['update2'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result3)){
          echo $row['update3'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result4)){
          echo $row['update4'];
        }
        ?></h3><br><br>
      </div>
      <div class="right">
        <h1>Welcome To VHOSTEL</h1>
      </div>
    </div>
    <script src="js/roomDetails.js" charset="utf-8"></script>
  </body>
</html>
