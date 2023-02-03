<?php
session_start();
include "koneksi.php";
    $nik = $_REQUEST['nik'];
    $nama = $_REQUEST['nama'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $notelp = $_REQUEST['notelp'];

    $koneksi = new PDO('mysql:host=localhost;dbname=masyarakat','root','');
    $query = $koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$username','$password','$notelp')");
    $data = $query->fetch();
    

    header("Location:login.php");
?>