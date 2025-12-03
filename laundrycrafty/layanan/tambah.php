<?php
require_once "../layouts/header.php";

if($_POST){
    mysqli_query($conn,"INSERT INTO layanan VALUES
    (NULL,'$_POST[nama]',$_POST[harga])");
    header("Location: index.php");
}
?>

<h4 class="mb-4">Tambah Layanan</h4>

<div class="card p-4 col-md-6">
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Nama Layanan</label>
        <input class="form-control" name="nama" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga per Kg</label>
        <input type="number" class="form-control" name="harga" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../layouts/footer.php"; ?>
