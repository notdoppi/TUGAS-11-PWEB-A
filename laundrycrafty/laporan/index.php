<?php
require_once "../layouts/header.php";

$q = mysqli_query($conn,"
SELECT tanggal_masuk, SUM(total_harga) total 
FROM transaksi 
GROUP BY tanggal_masuk
");
?>

<h4 class="mb-3">Laporan Pendapatan</h4>

<div class="card p-3">
<table class="table table-bordered">
<thead>
<tr>
<th>Tanggal</th>
<th>Total Pendapatan</th>
</tr>
</thead>
<tbody>
<?php while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $d['tanggal_masuk'] ?></td>
<td>Rp <?= number_format($d['total']) ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

<?php include "../layouts/footer.php"; ?>
