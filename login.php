<?php
include 'connection.php';
session_start();
$uname=$_POST["username"];
$upass=$_POST["userpassword"];
//echo $uname;
$error="Invalid";
$sqllogin="Select Name,Password from user where Name='$uname' and Password='$upass'";
echo $sqllogin;
$query=mysqli_query($connect,$sqllogin);
$rows=mysqli_fetch_array($query);
$trows=mysqli_num_rows($query);
if($trows>0)
{
   echo $_SESSION['name'] = $rows['Name'];


   header("Location:user.php"); 
}
else
{
    $_SESSION["error"] = $error;
    header("location:index.php"); 
}
?>