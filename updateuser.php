<?php
include 'connection.php';

$id=$_POST["userid"];





$sql="UPDATE `user` SET`Name`='".$_POST['username']."',`Email`='".$_POST['useremail']."',`Mobile`='".$_POST['mobile']."',`Role`='".$_POST['role']."',`Address`='".$_POST['address']."',`Password`='".$_POST['userpassword']."' WHERE id='$id'";
/*echo"UPDATE `user` SET`Name`='".$_POST['username']."',`Email`='".$_POST['useremail']."',`Mobile`='".$_POST['mobile']."',`Role`='".$_POST['role']."',`Address`='".$_POST['address']."',`Password`='".$_POST['userpassword']."' WHERE id='$id'";*/
$res=mysqli_query($connect,$sql);
header("Location:edituser.php?id=$id");

?>