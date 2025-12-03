<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 col-md-4">
<div class="card">
<div class="card-body">
<h4>Login Admin</h4>

<?php if(isset($_GET['err'])): ?>
<div class="alert alert-danger">Login Gagal</div>
<?php endif; ?>

<form method="POST" action="login_proses.php">
<input class="form-control mb-2" name="username" placeholder="Username" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
<button class="btn btn-primary w-100">Login</button>
</form>

</div>
</div>
</div>
</body>
</html>
