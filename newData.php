<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="proses.php" method="POST" enctype="multipart/form-data">
	<center>
		<a href='dashboard.php'><b>DASHBOARD</b></a> &nbsp
			<a href='newData.php'><b>TAMBAH DATA</b></a> &nbsp
			<a href='lihatprofil.php'><b>LIHAT PROFIL</b></a> &nbsp
			<a href='register.php'><b>LOGOUT</b></a> &nbsp <br><br>


		<h1>MASUKKAN DATA DIRI</h1>
		Nama Depan: <input type="text" name="namadepan"><br><br>
		Nama Belakang: <input type="text" name="namabelakang"><br><br>
		NIM: <input type="text" name="nim"><br><br>
		Kelas: <input type="text" name="kelas"><br><br>
		Hobi: <input type="text" name="hobi"><br><br>

		Genre Film: <br> 
				<input type="checkbox" name="genre[]" value="Horror">Horror <br><br>
				<input type="checkbox" name="genre[]" value="Anime">Anime <br><br>
				<input type="checkbox" name="genre[]" value="Action">Action <br><br>
				<input type="checkbox" name="genre[]" value="Drama">Drama <br><br>

		Tempat wisata[]: <br>
				<input type="checkbox" name="wisata[]" value="Bali">Bali <br><br>
				<input type="checkbox" name="wisata[]" value="Tanjung Selor">Tanjung Selor <br><br>
				<input type="checkbox" name="wisata[]" value="Jakarta">Jakarta <br><br>
				<input type="checkbox" name="wisata[]" value="Lombok">Lombok <br><br>
				
		Tanggal Lahir: <input type="date" name="tanggallahir"><br><br>

		<input type="submit" name="kirim" value="SEND">
	</center>
	</form>
</body>
</html>