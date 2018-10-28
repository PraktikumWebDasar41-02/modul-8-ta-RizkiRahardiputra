<?php

$db = new mysqli("localhost","root","","modul8");
$nim = $_POST['nim'];
$sql  = "SELECT * FROM data where nim like '%$nim'";
$result= mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pencarian Data</title>
</head>
<body>
	<table border="1">
		<thead>

			<th>Nim</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>Nim</th>
			<th>Kelas</th>
			<th>Hobi</th>
			<th>Genre Film</th>
			<th>Tempat Wisata</th>
			<th>Tanggal lahir</th>

	</thead>
	<tbody>
<?php
if($row>0){
	while($row=mysqli_fetch_assoc($result)){
		$nim= $row['nim'];
		echo"<tr>";
		echo"<td>".$row["namadepan"]."</td>";
		echo"<td>".$row["namabelakang"]."</td>";
		echo"<td>".$row["nim"]."</td>";
		echo"<td>".$row["kelas"]."</td>";
		echo"<td>".$row["hobi"]."</td>";
		echo"<td>".$row["genre"]."</td>";
		echo"<td>".$row["wisata"]."</td>";
		echo"<td>".$row["tanggallahir"]."</td>";
		echo"<td>"."<a href='delete.php?nim=$nim'>Delete</a>|<a href='detail.php?nim=$nim'>Detail</a>"."</td>";
		echo"</tr>";
		

	}
}else{
	echo "0 result";
}
?>
		
	</tbody>
</table>
<br>
<a href ="newData.php">Inputkan Lagi</a>

</body>
</html>