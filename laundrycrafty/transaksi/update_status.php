<?php
require_once "../config/db.php";
require_login();
mysqli_query($conn,"UPDATE transaksi SET status='$_GET[status]' WHERE id_transaksi=$_GET[id]");
header("Location: index.php");
