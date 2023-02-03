<?php
session_start();


$db  = new PDO("mysql:host=localhost;dbname=masyarakat",'root','');
$query = $db->query("SELECT * FROM `masyarakat` ");
$data = $query->fetch();
// cek apakah session ada atau tidak
?>
<title>Edit Data</title>
<html>
<body>
<div class="kotak_isi"> 
<table border="1" align="center" width="50%" height="50%" >
<form action="catatan.php" method="POST">
    <td>
    <table align="center">
    <tr>
        <td>Tanggal Pengaduan</td>
        <td><input type="date" name="tanggal" required ></td>
    </tr>
    <tr>
        <td>Nik</td>
        <td><input type="number" name="nik"></td>
    </tr>
    <tr>
        <td>Isi Lapioran</td>
        <td><textarea type="text" name="laporan"></textarea></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><label for="formFileSm" class="form-label"><input type="file"></label></td>
    </tr>
    <tr>
        <td></td>
        <td align="left"><input type="submit" name="simpan" value="simpan"></td>
        <td align="right"><a href="beranda.php" class="btn btn-info mb-3">KEMBALI</a></td>
    </tr>
    </table>
</form>
</td>
</table>
</body>
</html> 