<?php
session_start();
require_once("koneksi.php");

$nim=$_SESSION['nim']; 
$data =mysqli_query($conn, "SELECT * from data where nim='$nim'");
$row=mysqli_fetch_array($data);
$genre[]=explode(",",$row["genre"]);
$wisata[]=explode(",",$row["wisata"]);

?>
<html>
<head>
    <title></title>
</head>
<body>
    <input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
    <table>
    <form action="prosesedit.php" method="POST">

        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['namadepan']; ?>" name="namadepan"></td>
        </tr>

        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['namabelakang']; ?>" name="namabelakang"></td>
        </tr>

        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="number" value="<?php echo $row['nim']; ?>" name="nim"></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['kelas']; ?>" name="kelas"></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['hobi']; ?>" name="hobi"></td>
        </tr>

        <tr>
            <td>Genre Film</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="genre[]" value="Horror" <?php if(in_array('Horror',$genre)):echo'checked'; endif ?> >Horror<br>
                <input type="checkbox" name="genre[]" value="Anime" <?php if(in_array('Anime',$genre)):echo'checked'; endif ?> >Anime<br>
                <input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Action<br>
                <input type="checkbox" name="genre[]" value="Drama" <?php if(in_array('Drama',$genre)):echo'checked'; endif ?> >Drama</td>
        </tr>
        <tr>
            <td>Tempat Wisata</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="wisata[]" value="Bali"<?php if(in_array('Bali',$wisata)):echo'checked';endif?> >Bali<br>
                <input type="checkbox" name="wisata[]" value="Tanjung Selor"<?php if(in_array('Tanjung selor',$wisata)):echo'checked';endif?> >Tanjung Selor
                <br>
                <input type="checkbox" name="wisata[]" value="Jakarta"<?php if(in_array('Jakarta',$wisata)):echo'checked';endif?> >Jakarta<br>
                <input type="checkbox" name="wisata[]" value="Lombok" <?php if(in_array('Lombok',$wisata)):echo'checked';endif?>>Lombok</td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" value="<?php echo $row['tanggallahir']; ?>" name="tanggallahir"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </form>
    
</table>

</body>
</html>