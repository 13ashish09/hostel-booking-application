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

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $update1 = mysqli_real_escape_string($con, $_POST['change-update1']);
    $update2 = mysqli_real_escape_string($con, $_POST['change-update2']);
    $update3 = mysqli_real_escape_string($con, $_POST['change-update3']);
    $update4 = mysqli_real_escape_string($con, $_POST['change-update4']);

    $sql = "UPDATE updates SET update1 = '$update1', update2 = '$update2', update3 = '$update3', update4 = '$update4' WHERE updateId = 1";

    $result = mysqli_query($con,$sql);

    if(!$result) {
      echo "Error: ".mysqli_error($con);
    }else {
       echo "Successful";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/change-update.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta charset="utf-8">
    <title>Change Updates</title>
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
        <h1>Edit Update Section</h1><br>
        <div class="change-updates">
          <form class="" action="" method="post">
            <h2>Update 1</h2>
            <textarea name="change-update1" id="change-update1" rows="8" cols="80"></textarea><br><br>
            <h2>Update 2</h2>
            <textarea name="change-update2" id="change-update2" rows="8" cols="80"></textarea><br><br>
            <h2>Update 3</h2>
            <textarea name="change-update3" id="change-update3" rows="8" cols="80"></textarea><br><br>
            <h2>Update 4</h2>
            <textarea name="change-update4" id="change-update4" rows="8" cols="80"></textarea><br><br>
            <button type="submit" name="button-change-content" id="button-change-content" onclick="changeUpdate()">Change</button>
          </form>
        </div>
        <br><br>
      </div>
    </div>
    <script src="js/about.js" charset="utf-8"></script>
  </body>
</html>
