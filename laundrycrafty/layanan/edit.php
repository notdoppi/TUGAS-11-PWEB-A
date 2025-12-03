<?php
require_once "../layouts/header.php";

$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM layanan WHERE id_layanan=$id"));

if($_POST){
    mysqli_query($conn,"UPDATE layanan SET
    nama_layanan='$_POST[nama]',
    harga_per_kg=$_POST[harga]
    WHERE id_layanan=$id");
    header("Location: index.php");
}
?>

<h4 class="mb-4">Edit Layanan</h4>

<div class="card p-4 col-md-6">
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Nama Layanan</label>
        <input class="form-control" name="nama" value="<?= $d['nama_layanan'] ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga per Kg</label>
        <input type="number" class="form-control" name="harga" value="<?= $d['harga_per_kg'] ?>" required>
    </div>

    <button class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../layouts/footer.php"; ?>
