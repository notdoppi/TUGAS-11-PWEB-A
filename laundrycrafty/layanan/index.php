<?php
require_once "../layouts/header.php";
$q=mysqli_query($conn,"SELECT * FROM layanan");
?>

<h4 class="mb-3">Data Layanan</h4>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Layanan</a>

<div class="card p-3">
<table class="table table-bordered">
<thead>
<tr>
<th>Nama Layanan</th>
<th>Harga / Kg</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $d['nama_layanan'] ?></td>
<td>Rp <?= number_format($d['harga_per_kg']) ?></td>
<td>
<a class="btn btn-sm btn-warning" href="edit.php?id=<?=$d['id_layanan']?>">Edit</a>
<a class="btn btn-sm btn-danger" href="hapus.php?id=<?=$d['id_layanan']?>">Hapus</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

<?php include "../layouts/footer.php"; ?>
