<?php
require_once "config/db.php";

require_login();

$p = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) c FROM pelanggan"))['c'];
$t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) c FROM transaksi"))['c'];
$u = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_harga) s FROM transaksi"))['s'];
include "layouts/header.php";
?>

<h3 class="mb-4">Dashboard</h3>

<div class="row">
    <div class="col-md-4">
        <div class="card p-3 bg-light stat-card">
            <h6>Total Pelanggan</h6>
            <h3><?= $p ?></h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 bg-light stat-card">
            <h6>Total Transaksi</h6>
            <h3><?= $t ?></h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 bg-light stat-card">
            <h6>Total Pendapatan</h6>
            <h3>Rp <?= number_format($u) ?></h3>
        </div>
    </div>
</div>

<?php include "layouts/footer.php"; ?>
