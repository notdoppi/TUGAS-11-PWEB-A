<?php
require_once "../layouts/header.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM pelanggan WHERE id_pelanggan=$id"));

if($_POST){
    mysqli_query($conn,"UPDATE pelanggan SET
    nama='$_POST[nama]',
    alamat='$_POST[alamat]',
    no_hp='$_POST[no_hp]'
    WHERE id_pelanggan=$id");
    header("Location: index.php");
}
?>

<h4 class="mb-4">Edit Pelanggan</h4>

<div class="card p-4 col-md-6">
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required><?= $data['alamat'] ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">No HP</label>
        <input class="form-control" name="no_hp" value="<?= $data['no_hp'] ?>" required>
    </div>

    <button class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../layouts/footer.php"; ?>
