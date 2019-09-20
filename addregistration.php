<?php
include 'connection.php';
$query=mysqli_query($connect,"INSERT INTO user(Name,Email,Mobile,Role,Address,Password)
  VALUES('".$_POST["username"]."','".$_POST["useremail"]."','".$_POST["subject"]."','".$_POST["role"]."',
  '".$_POST["address"]."','".$_POST["userpassword"]."')");
  //echo $query;
  header('location:index.php')
  ?>