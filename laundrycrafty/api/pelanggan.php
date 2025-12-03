<?php
include "../config/db.php";
$q=mysqli_query($conn,"SELECT * FROM pelanggan");
$data=[];
while($d=mysqli_fetch_assoc($q)) $data[]=$d;
echo json_encode($data);
