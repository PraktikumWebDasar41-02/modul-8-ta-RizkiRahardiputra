<?php
require_once("koneksi.php");

 
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="INSERT INTO login (username,password,email) values ('$username','$password','$email')";

if(mysqli_query($conn,$sql)){
 header("location:index.php");
}

else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>
