<!-- File: views/dashboard.php -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Sistem Informasi</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.m
</head>
<body class="bg-light">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
<div class="container">
<a class="navbar-brand" href="#">RAI Dashboard</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" da
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link text-white" href="index.php?action=logout"
<i class="bi bi-box-arrow-right"></i> Logout
</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- Konten Utama -->
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow-sm rounded-3">
<div class="card-body p-5">
<h2 class="display-5 text-primary">Halo, <?= $_SESSION['nama_
<p class="lead mt-3">Selamat datang di halaman dashboard. And
</div>
</div>
</div>
</div>
</div>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundl
</body>
</html>