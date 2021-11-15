<?php

  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}


    $_1bedAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '1-BED A/C'";
    $result1 = mysqli_query($con, $_1bedAC);

    $_2bedAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '2-BED A/C'";
    $result2 = mysqli_query($con, $_2bedAC);

    $_3bedAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '3-BED A/C'";
    $result3 = mysqli_query($con, $_3bedAC);

    $_4bedAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '4-BED A/C'";
    $result4 = mysqli_query($con, $_4bedAC);

    $_6bedAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '6-BED A/C'";
    $result5 = mysqli_query($con, $_6bedAC);

    $_2bedNonAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '2-BED Non A/C'";
    $result6 = mysqli_query($con, $_2bedNonAC);

    $_4bedNonAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '4-BED Non A/C'";
    $result7 = mysqli_query($con, $_4bedNonAC);

    $_6bedNonAC = "SELECT SUM(availableBeds) from rooms WHERE roomType = '6-BED Non A/C'";
    $result8 = mysqli_query($con, $_6bedNonAC);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/roomDetails.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta charset="utf-8">
    <title>Room Details</title>
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
      <!-- nav bar -->
      <br><br>
      <div class="start">
        <h1>ROOM DETAILS</h1>
        <span><a href="roomReg.php"><button type="button" name="button-regnow" class="regnow">REGISTER NOW!</button></a></span>
      </div>
      <table id="infotable">
        <tr>
            <td class="row" id="room1"><p class="room-type">1-BED A/C</p><img onclick="showMore1()" src="assets/plus.png" class="plus" id="roomplus1" alt="">
            </td>
        </tr>
        <tr>
          <td class="hidden" id="hid1">
              <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result1)) {
                echo $row['SUM(availableBeds)'];
              } ?><span class="due-date">Room Fee - Rs.65,000/-</span></p>
              <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.95,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room2">
            <td><p class="room-type">2-BED A/C</p><img src="assets/plus.png" onclick="showMore2()" class="plus" id="roomplus2" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid2">
              <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result2)) {
                echo $row['SUM(availableBeds)'];
              } ?><span class="due-date">Room Fee - Rs.60,000/-</span></p>
              <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.90,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room3">
            <td><p class="room-type">3-BED A/C</p><img onclick="showMore3()" src="assets/plus.png" id="roomplus3" class="plus" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid3">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result3)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.55,000/-</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.85,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room4">
            <td><p class="room-type">4-BED A/C</p><a href="#"><img src="assets/plus.png" onclick="showMore4()" class="plus" id="roomplus4" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid4">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result4)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.50,000/-</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.80,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room5">
            <td><p class="room-type">6-BED A/C</p><a href="#"><img src="assets/plus.png" onclick="showMore5()" class="plus" id="roomplus5" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid5">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result5)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.45,000/-</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.75,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room6">
            <td><p class="room-type">2-BED Non A/C</p><a href="#"><img src="assets/plus.png" onclick="showMore6()" class="plus" id="roomplus6" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid6">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result6)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.40,000</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.70,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room7">
            <td><p class="room-type">4-BED Non A/C</p><a href="#"><img src="assets/plus.png" onclick="showMore7()" class="plus" id="roomplus7" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid7">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result7)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.35,000/-</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.65,000/-</span></p>
          </td>
        </tr>
        <tr>
          <div class="row" id="room8">
            <td><p class="room-type">6-BED Non A/C</p><a href="#"><img src="assets/plus.png" onclick="showMore8()" class="plus" id="roomplus8" alt=""></td>
          </div>
        </tr>
        <tr>
          <td class="hidden" id="hid8">
            <p class="topic">Available Beds - <?php while ($row = mysqli_fetch_assoc($result8)) {
              echo $row['SUM(availableBeds)'];
            } ?><span class="due-date">Room Fee - Rs.30,000/-</span></p>
            <p class="ques">Mess Fee - Rs.30,000/-<span class="points">Total Fee - Rs.60,000/-</span></p>
          </td>
        </tr>
      </table>
    </div>
    <script src="js/roomDetails.js" charset="utf-8"></script>
  </body>
</html>w
