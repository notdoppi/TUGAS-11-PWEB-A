<?php
$conn = mysqli_connect("localhost","root","","laundrycrafty");
if(!$conn){
    die("Koneksi gagal");
}
session_start();

function require_login(){
    if(!isset($_SESSION['user'])){
        header("Location: /laundrycrafty/auth/login.php");
        exit;
    }
}
?>
