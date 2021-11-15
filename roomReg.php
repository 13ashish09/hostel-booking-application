<?php

  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $block = $_POST['block-select'];
    $roomtype = $_POST['room-select'];
    $yearFrom = $_POST['yearfrom'];
    $yearTo = $_POST['yearto'];

    session_start();
    $session = $_SESSION['login_user'];

    $query = "INSERT INTO registration (regNo, roomType, block, yearFrom, yearTo) VALUES('$session', '$roomtype', '$block', $yearFrom, $yearTo)";
    $result = mysqli_query($con, $query);

    $query1 = "SELECT roomId, availableBeds from rooms where blockName = '$block' and roomType = '$roomtype'";
    $result1 =mysqli_query($con, $query1);
    // $count = mysqli_num_rows($result1);
    // $rows = mysqli_fetch_assoc($result1);

    while($row = mysqli_fetch_assoc($result1)) {
      if ($row['availableBeds'] == 0) {
        continue;
      }
      else {
        $roomNo =  $row['roomId'];
        $query2 = "UPDATE rooms SET availableBeds = (availableBeds - 1) WHERE roomId = $roomNo";

        $result2 =mysqli_query($con, $query2);

        session_start();
        $session = $_SESSION['login_user'];

        // echo $session;
        $query3 = "UPDATE userdetails SET roomNo = $roomNo, block = '$block' WHERE user_reg_id = '$session'";

        $result3 = mysqli_query($con, $query3);
        if (!$result3 || !$result2) {
          die('Error: '.mysqli_error($con));
        }
        else {
          header("Location: invoice.php");
        }
        break;
      }
    }

    if (!$result || !$result1) {
      die('Error: ' . mysqli_error($con));
    }
    else {
      header("Location: invoice.php");
    }
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/roomReg.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Room Registration</title>
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
    <br><br><br><br>
    <div class="container">
      <h2>Room Registration</h2><br>
      <form class="newReg" name="roomRegForm" action="" method="post">
        <table>
          <tr>
            <td>Block:</td>
            <td colspan="2"><select class="block-type" name="block-select">
                <option value="default">--Select Block--</option>
                <option value="A-Block">A-Block</option>
                <option value="B-Block">B-Block</option>
                <option value="C-Block">C-Block</option>
                <option value="D-Block">D-Block</option>
                <option value="E-Block">E-Block</option>
                <option value="F-Block">F-Block</option>
                <option value="G-Block">G-Block</option>
                <option value="H-Block">H-Block</option>
                <option value="I-Block">I-Block</option>
                <option value="J-Block">J-Block</option>
                <option value="K-Block">K-Block</option>
                <option value="L-Block">L-Block</option>
                <option value="M-Block">M-Block</option>
                <option value="N-Block">N-Block</option>
                <option value="O-Block">O-Block</option>
                <option value="P-Block">P-Block</option>
                <option value="Q-Block">Q-Block</option>
            </select></td>
          </tr>
          <tr>
            <td>Room Type:</td>
            <td colspan="2"><select class="room-type" name="room-select">
                <option value="deault">--Select Room--</option>
                <option value="1-BED A/C">1-BED A/C</option>
                <option value="2-BED A/C">2-BED A/C</option>
                <option value="3-BED A/C">3-BED A/C</option>
                <option value="4-BED A/C">4-BED A/C</option>
                <option value="6-BED A/C">6-BED A/C</option>
                <option value="2-BED Non A/C">2-BED Non A/C</option>
                <option value="4-BED Non A/C">4-BED Non A/C</option>
                <option value="6-BED Non A/C">6-BED Non A/C</option>
            </select></td>
          </tr>
          <tr>
            <td>Year of Stay:</td>
            <td><input type="number" name="yearfrom" placeholder="From" id="year-from-input"></td>
            <td><input type="number" name="yearto" placeholder="To" id="year-to-input"></td>
          </tr>
        </table>
        <div class="buttons-room-reg">
          <!-- <input type="submit" name="button-room-reg" value="REGISTER"  id="button-room-reg"> -->
          <button style="font-weight: bold;" type="submit" name="button-room-reg" id="button-room-reg">REGISTER</button>
          <a style="text-decoration: none;color: black;
          " href="home.php"><button style="font-weight: bold;" type="button" name="button-cancel-reg">CANCEL</button></a>
        </div>
      </form>
    </div>
    <br><br><br>
    <!-- <script src="login-user.js" charset="utf-8"></script> -->
  </body>
</html>
