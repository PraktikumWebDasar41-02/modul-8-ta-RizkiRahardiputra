<?php
require_once("koneksi.php");

$namadepan=$_POST['namadepan'];
$namabelakang= $_POST['namabelakang'];
$nim= $_POST['nim'];
$kelas= $_POST['kelas'];
$hobi= $_POST['hobi'];
$genre= $_POST['genre'];
$wisata= $_POST['wisata'];


$sql= " UPDATE data SET namadepan='$namadepan', namabelakang='$namabelakang' ,nim='$nim',kelas='$kelas', hobi='$hobi', genre='$genre', wisata='$wisata',tanggallahir='$tanggallahir' where nim='$nim'";
if(mysqli_query($conn, $sql)){
	header("Location:dashboard.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($conn);
}
?>