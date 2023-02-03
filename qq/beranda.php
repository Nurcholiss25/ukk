<?php
include "header.php";
session_start();
?>
<html> 
    <body>
        
        <table border="1" height="40%" width="50%" align="center" >
           <td><h3 align="center"> Selamat Datang Pengguna <?php echo $_SESSION['username']; ?> Di Aplikasi Pengaduan masyarakat</h3></td>
        </table>
    </body>
</html>
