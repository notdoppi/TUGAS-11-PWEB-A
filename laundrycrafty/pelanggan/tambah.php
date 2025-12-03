<?php
require_once "../layouts/header.php";

if($_POST){
    mysqli_query($conn,"INSERT INTO pelanggan VALUES
    (NULL,'$_POST[nama]','$_POST[alamat]','$_POST[no_hp]')");
    header("Location: index.php");
}
?>

<h4 class="mb-4">Tambah Pelanggan</h4>

<div class="card p-4 col-md-6">
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input class="form-control" name="nama" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">No HP</label>
        <input class="form-control" name="no_hp" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../layouts/footer.php"; ?>
