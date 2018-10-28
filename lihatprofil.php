<?php
session_start();
require_once "koneksi.php";
$nim=$_SESSION['nim'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form>
			<a href='dashboard.php'><b>DASHBOARD</b></a> &nbsp
			<a href='newData.php'><b>TAMBAH DATA</b></a> &nbsp
			<a href='lihatprofil.php'><b>LIHAT PROFIL</b></a> &nbsp
			<a href='register.php'><b>LOGOUT</b></a> &nbsp <br><br>
			<tr>
				
				<?php
				echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a> &nbsp";
				echo "<a href='delete.php?nim=$nim'>Delete</a> &nbsp";
				echo "<a href='addfoto.php?nim=$nim'>Tambah foto</a>&nbsp";
				echo "<a href='editpasswordphp?nim=$nim'>Edit Password</a>";
				?>
				
			</tr>

			<?php
			
			$sql ="SELECT * FROM data where nim='$nim'";
			$sqllogin ="SELECT * FROM data where nim='$nim'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);

			echo "<tr>";
			echo "<td>"."<br><br>"."INPUTAN DATA"."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td colspan=4>"."Nama Depan : ".$row['namadepan']."<br><br>";
			echo "Nama Belakang : ".$row['namabelakang']."<br><br>";
			echo "Username : ".$row['username']."<br><br>";
			echo "Nim : ".$row['nim']."<br><br>";
			echo "Kelas : ".$row['kelas']."<br><br>";
			echo "Hobi : ".$row['hobi']."<br><br>";
			echo "Genre : ".$row['genre']."<br><br>";
			echo "Tempat Wisata : ".$row['wisata']."<br><br>";
			echo "Tanggal Lahir : ".$row['tanggallahir']."</td>";
			
			

			echo "</tr>";

			mysqli_close($conn);

			?>
		</form>
	</table>
</body>
</html>