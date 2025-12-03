<?php
require_once "../layouts/header.php";
$q = mysqli_query($conn,"SELECT * FROM pelanggan");
?>

<h4 class="mb-3">Data Pelanggan</h4>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Pelanggan</a>

<div class="card p-3">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Nama</th>
<th>Alamat</th>
<th>No HP</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $d['nama'] ?></td>
<td><?= $d['alamat'] ?></td>
<td><?= $d['no_hp'] ?></td>
<td>
<a class="btn btn-sm btn-warning" href="edit.php?id=<?= $d['id_pelanggan']?>">Edit</a>
<a class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')" href="hapus.php?id=<?= $d['id_pelanggan']?>">Hapus</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

<?php include "../layouts/footer.php"; ?>
