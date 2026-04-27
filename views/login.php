!-- File: views/login.php -->
!DOCTYPE html>
html lang="id">
head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Sistem | Rekayasa Aplikasi Internet</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.c
<style>
body {
background-color: #f4f7f6;
height: 100vh;
display: flex;
align-items: center;
justify-content: center;
}
.login-card {
border-radius: 15px;
box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
overflow: hidden;
}
.login-header {
background: linear-gradient(135deg, #0d6efd, #0dcaf0);
color: white;
padding: 30px 20px;
text-align: center;
}
</style>
/head>
body>
div class="container">
<div class="row justify-content-center">
<div class="col-md-5 col-lg-4">
<div class="card login-card">
<div class="login-header">
<h3 class="mb-0">Selamat Datang</h3>
<p class="mt-2 mb-0 text-white-50">Silakan login ke akun Anda</p>
</div>
<div class="card-body p-4">
<?php if(isset($error_message)): ?>
<div class="alert alert-danger alert-dismissible fade show" r
<?= $error_message ?>
<button type="button" class="btn-close" data-bs-dismiss=">
</div>
<?php endif; ?>
<form action="index.php?action=loginProcess" method="POST">
<div class="mb-3">
<label for="username" class="form-label text-muted">Usern
<input type="text" class="form-control" id="username" nam
</div>
<div class="mb-4">
<label for="password" class="form-label text-muted">Password</label>
<input type="password" class="form-control" id="password"
</div>
<div class="d-grid">
<button type="submit" class="btn btn-primary btn-lg">Masu
</div>
</form>
</div>
</div>
<div class="text-center mt-3 text-muted">
<small>&copy; <?= date('Y'); ?> Mata Kuliah Rekayasa Aplikasi Interne
</div>
</div>
</div>
</div>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.mi
</body>
</html>