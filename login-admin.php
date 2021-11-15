<?php
  include 'config.php';
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['username-admin']);
    $password = mysqli_real_escape_string($con, $_POST['password-admin']);

    $sql = "SELECT adminId FROM admin WHERE adminId = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
       $_SESSION['login_user'] = $username;

       header("location: home-admin.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login-user.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Admin Login</title>
  </head>
  <body>
    <h1>VHostel - Admin</h1>
    <hr>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <h2>LOGIN as Admin</h2><br>
      <form class="admin-login-form" action="" method="post">
        <input type="text" name="username-admin" placeholder="Username" id="username-input" style="width: 300px;
          height: 40px;
          border-radius: 10px;"><br><br>
        <input type="password" name="password-admin" id="password-input" placeholder="Password" style="width: 300px;
          height: 40px;
          border-radius: 10px;">
        <p id="show-pass" onclick="showpass()">Show Password</p>
        <br><br>
        <button type="submit" name="button">LOGIN</button>
      </form>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
  </body>
</html>
