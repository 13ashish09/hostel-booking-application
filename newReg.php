<?php

  include 'config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regNo = $_POST['regNo'];
    $name = $_POST['fullname'];
    $gender = $_POST['gender-select'];
    $phoneNo = $_POST['contact'];
    $address = $_POST['address'];
    $gName = $_POST['guardianName'];
    $gRel = $_POST['gRelation-select'];
    $gContact = $_POST['gContact'];
    $email = $_POST['email'];
    $degree = $_POST['degree'];
    $dept = $_POST['department-select'];
    $password = $_POST['password'];

    $query1 = "INSERT INTO user VALUES('$regNo', '$email', '$password', '$dept', '$degree')";
    $result1 =mysqli_query($con, $query1);

    $query2 = "INSERT INTO userdetails VALUES('$regNo', '$name', '$phoneNo', '$gender', '$address', '$gName', '$gRel', '$gContact')";
    $result2 =mysqli_query($con, $query2);

    if (!$result1 or !$result2) {
      die('Error: ' . mysqli_error($con));
    }
    else {
      header("Location: successSign.php");
    }
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/newReg.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>New Registration</title>
  </head>
  <body>
    <h1>VHostel</h1>
    <hr>
    <br><br><br><br>
    <div class="container">
      <h2>REGISTER</h2><br>
      <form class="newReg" name="studentReg" action="" method="post">
        <table>
          <tr>
            <td style="font-weight: bold;">Registration No.:</td>
            <td><input type="text" name="regNo" placeholder="RegNo." id="username-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Full Name:</td>
            <td><input type="text" name="fullname" placeholder="Full Name" id="fullname-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Gender:</td>
            <td><select class="gender" name="gender-select">
              <option value="default">--Select Gender--</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select> </td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Contact No.:</td>
            <td><input type="tel" name="contact" placeholder="Contact Number" id="contact-input" pattern="[7-9]{1}[0-9]{9}"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Address:</td>
            <td><input type="textarea" name="address" placeholder="Address" id="address-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Guardian Name:</td>
            <td><input type="text" name="guardianName" placeholder="Guardian Name" id="guardianName-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Guardian Relation:</td>
            <td><select class="gRelation" name="gRelation-select">
              <option value="default">--Select Relation--</option>
              <option value="Father">Father</option>
              <option value="Mother">Mother</option>
              <option value="Other">Other</option>
            </select> </td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Guardian Contact No.:</td>
            <td><input type="tel" name="gContact" placeholder="Guardian Contact Number" id="contact-input" pattern="[7-9]{1}[0-9]{9}"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">University Mail id:</td>
            <td><input type="email" name="email" placeholder="Mail ID" id="email-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Degree:</td>
            <td><input type="text" name="degree" placeholder="B.Tech / M.Tech" id="degree-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Department:</td>
            <td><select class="department" name="department-select">
              <option value="default">--Select Department--</option>
              <option value="Computer Science and Engineering">Computer Science and Engineering</option>
              <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Aerospace Engineering">Aerospace Engineering</option>
              <option value="Biochemical Engineering">Biochemical Engineering</option>
              <option value="Information Technology">Information technology</option>
            </select> </td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Password:</td>
            <td><input type="password" name="password" placeholder="Password" id="password-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Confirm Password:</td>
            <td><input type="password" name="confirm-password" placeholder="Confirm Password" id="confirm-password-input"></td>
          </tr>
        </table>
        <br>
        <button style="font-weight: bold;" type="submit" name="button">REGISTER</button>
        </div>
      </form>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
