<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=masyarakat', 'root', '');
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE `username`='$username' AND `password`='$password'");
$data = $query->fetch();
if($data){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location:beranda.php");
}else{
    header("Location:login.php");
    
}