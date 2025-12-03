<?php
require_once "../layouts/header.php";

$p = mysqli_query($conn,"SELECT * FROM pelanggan");
$l = mysqli_query($conn,"SELECT * FROM layanan");

if($_POST){
    $h = mysqli_fetch_assoc(mysqli_query($conn,"SELECT harga_per_kg FROM layanan WHERE id_layanan=$_POST[layanan]"));
    $total = $h['harga_per_kg'] * $_POST['berat'];

    mysqli_query($conn,"INSERT INTO transaksi VALUES
    (NULL,$_POST[pelanggan],$_POST[layanan],CURDATE(),NULL,$_POST[berat],$total,'Proses')");

    header("Location: index.php");
}
?>

<h4 class="mb-4">Tambah Transaksi</h4>

<div class="card p-4 col-md-6">
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Pelanggan</label>
        <select class="form-select" name="pelanggan" required>
            <option value="">-- Pilih --</option>
            <?php while($d=mysqli_fetch_assoc($p)){ ?>
                <option value="<?= $d['id_pelanggan'] ?>"><?= $d['nama'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Layanan</label>
        <select class="form-select" name="layanan" required>
            <option value="">-- Pilih --</option>
            <?php while($d=mysqli_fetch_assoc($l)){ ?>
                <option value="<?= $d['id_layanan'] ?>"><?= $d['nama_layanan'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Berat (Kg)</label>
        <input class="form-control" type="number" step="0.1" name="berat" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../layouts/footer.php"; ?>
