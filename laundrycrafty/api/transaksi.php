<?php
include "../config/db.php";
$id=$_GET['id'];
$q=mysqli_query($conn,"SELECT * FROM transaksi WHERE id_transaksi=$id");
echo json_encode(mysqli_fetch_assoc($q));
