<?php
require_once "../config/db.php";
require_login();
mysqli_query($conn,"DELETE FROM pelanggan WHERE id_pelanggan=$_GET[id]");
header("Location: index.php");
