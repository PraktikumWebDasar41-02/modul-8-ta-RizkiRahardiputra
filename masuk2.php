<?php
require_once("koneksi.php");

$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM login WHERE username='$username' && password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0){
 echo "Username & Password Not Found";
 header("location:index.php");
}else{
	$row=mysqli_fetch_assoc($result);

	if($row['username']== $username && $row['password']== $password){
		header("location:dashboard.php");
	}else{
		echo "Coba Inputkan lagi...";

	}
}

?>
