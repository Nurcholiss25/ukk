<?php
include "header.php";
$db  = new PDO("mysql:host=localhost;dbname=masyarakat",'root','');
$query = $db->query("SELECT * FROM pengaduan");
session_start();
?>
<html>
    <body>
<title>Catatan Pengaduan</title>
<table border="1" align="center" width="50%">
</table>
 <table border="1" align="center" width="50%" height="40%">
            <td>
                <table align="center" border="1" width="80%" height="20%">
                    <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Nik</th>
                    <th>Isi Laporan</th>
                    </tr>
                    <?php while($data = $query->fetch()) : ?>
                    <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['tanggal']?></td>
                        <td><?= $data['nik']?></td>
                        <td><?= $data['laporan']?></td>
                    </tr>
                    <?php endwhile; ?>
                    </html>
                    </body>