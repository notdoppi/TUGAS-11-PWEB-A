<?php
require_once "../config/db.php";
require_login();
mysqli_query($conn,"DELETE FROM layanan WHERE id_layanan=$_GET[id]");
header("Location: index.php");
