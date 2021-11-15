<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

    $heading = "SELECT heading from aboutpage where aboutId = 1";
    $result1 = mysqli_query($con, $heading);

    $content1 = "SELECT content1 from aboutpage where aboutId = 1";
    $result2 = mysqli_query($con,$content1);

    $content2 = "SELECT content2 from aboutpage where aboutId = 1";
    $result3 = mysqli_query($con,$content2);

    $update1 = "SELECT update1 from updates where updateId = 1";
    $result4 = mysqli_query($con, $update1);

    $update2 = "SELECT update2 from updates where updateId = 1";
    $result5 = mysqli_query($con,$update2);

    $update3 = "SELECT update3 from updates where updateId = 1";
    $result6 = mysqli_query($con,$update3);

    $update4 = "SELECT update4 from updates where updateId = 1";
    $result7 = mysqli_query($con,$update4);

    if(!$result1 || !$result2 || !$result3 || !$result4 || !$result5 || !$result6 || !$result7) {
      echo "Error: ".mysqli_error($con);
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta charset="utf-8">
    <title>About VIT</title>
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
        while($row = mysqli_fetch_assoc($result4)){
          echo $row['update1'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result5)){
          echo $row['update2'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result6)){
          echo $row['update3'];
        }
        ?></h3><br><br>
        <h3><?php
        while($row = mysqli_fetch_assoc($result7)){
          echo $row['update4'];
        }
        ?></h3><br><br>
      </div>
      <div class="right">
        <h1 id="about-heading"><?php
        while($row = mysqli_fetch_assoc($result1)){
          echo $row['heading'];
        }
        ?></h1>
        <table id="abouttable">
          <tr>
              <td class="row" id="about1"><p class="about-content"><?php
              while($row = mysqli_fetch_assoc($result2)){
                echo $row['content1'];
              }
              ?></p>
              </td>
          </tr>
          <tr>
            <div class="row" id="about2">
              <td><p class="about-content"><?php
              while($row = mysqli_fetch_assoc($result3)){
                echo $row['content2'];
              }
              ?></p></td>
            </div>
          </tr>
          <tr>
        </table>
      </div>
    </div>
    <script src="js/roomDetails.js" charset="utf-8"></script>
    <script src="js/about.js" charset="utf-8"></script>
  </body>
</html>
