<?php
require_once "../layouts/header.php";

$q = mysqli_query($conn,"
SELECT transaksi.*, pelanggan.nama, layanan.nama_layanan
FROM transaksi
JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
JOIN layanan ON transaksi.id_layanan = layanan.id_layanan
");
?>

<h4 class="mb-3">Data Transaksi</h4>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Transaksi</a>

<div class="card p-3">
<table class="table table-bordered">
<thead>
<tr>
<th>Pelanggan</th>
<th>Layanan</th>
<th>Berat</th>
<th>Total</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $d['nama'] ?></td>
<td><?= $d['nama_layanan'] ?></td>
<td><?= $d['berat'] ?> Kg</td>
<td>Rp <?= number_format($d['total_harga']) ?></td>
<td>
<span class="badge bg-info"><?= $d['status'] ?></span>
</td>
<td>
<a class="btn btn-success btn-sm" href="update_status.php?id=<?= $d['id_transaksi'] ?>&status=Selesai">Selesai</a>
<a class="btn btn-secondary btn-sm" href="update_status.php?id=<?= $d['id_transaksi'] ?>&status=Sudah Diambil">Diambil</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

<?php include "../layouts/footer.php"; ?>
