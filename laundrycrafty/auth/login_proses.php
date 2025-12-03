<?php
include "../config/db.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$q = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
$data = mysqli_fetch_assoc($q);

if($data && password_verify($pass, $data['password'])){
    $_SESSION['user'] = $data;
    header("Location: ../dashboard.php");
}else{
    header("Location: login.php?err=1");
}
