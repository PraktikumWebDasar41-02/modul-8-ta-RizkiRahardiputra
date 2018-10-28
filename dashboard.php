<?php
session_start();
require_once("koneksi.php");
?>
<table border=1>
	<head>

		<h1><center>Selamat Datang</h1></center>

			<a href='dashboard.php'><b>DASHBOARD</b></a> &nbsp
			<a href='newData.php'><b>TAMBAH DATA</b></a> &nbsp
			<a href='lihatprofil.php'><b>LIHAT PROFIL</b></a> &nbsp
			<a href='register.php'><b>LOGOUT</b></a> &nbsp <br><br>


		<form action="search.php" method="POST">
		<input type="text" name="nim" placeholder="Cari Nim Mahasiswa">
		<input type="submit" name="cari" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;
		


		<b>Input Data</b></a><br>
		<th>Nama Depan</th>
		<th>Nim Belakang</th>
		<th>Nim</th>
		<th>Kelas</th>
		<th>Hobi</th>
		<th>Genre </th>
		<th>Tempat Wisata</th>
		<th>Tanggal lahir</th>
		<th>Pilih</th>



	</head>
	<tbody>
<?php
$sql = "SELECT * FROM data";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	

	//output data 
	while($row=mysqli_fetch_assoc($result)){
		$nim=$row['nim'];
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
	echo "0 results";
}
mysqli_close($conn);
?>
</tbody>
</table>