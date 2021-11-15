<?php
  $con = mysqli_connect("localhost", "root", "", "hostel_reg");
  if (!$con) {
    die("Not connected to the DataBase: ".mysqli_error());
  }
 ?>
