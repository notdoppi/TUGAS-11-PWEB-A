<?php
require_once __DIR__ . "/../config/db.php";
require_login();
?>
<!DOCTYPE html>
<html>
<head>
    <title>LaundryCrafty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/laundrycrafty/assets/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
    <a class="navbar-brand" href="/laundrycrafty/dashboard.php">LaundryCrafty</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/laundrycrafty/dashboard.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/laundrycrafty/pelanggan/index.php">Pelanggan</a></li>
            <li class="nav-item"><a class="nav-link" href="/laundrycrafty/layanan/index.php">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="/laundrycrafty/transaksi/index.php">Transaksi</a></li>
            <li class="nav-item"><a class="nav-link" href="/laundrycrafty/laporan/index.php">Laporan</a></li>
            <li class="nav-item"><a class="nav-link text-warning" href="/laundrycrafty/auth/logout.php">Logout</a></li>
        </ul>
    </div>
</div>
</nav>

<div class="container mt-4">
