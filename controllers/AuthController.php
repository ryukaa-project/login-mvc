<?php
// File: controllers/AuthController.php
require_once 'models/UserModel.php';
class AuthController {
private $db;
private $userModel;
public function __construct($db) {
$this->db = $db;
$this->userModel = new UserModel($db);
}
// Menampilkan halaman login
public function index() {
// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['user_id'])) {
header("Location: index.php?action=dashboard");
exit;
}
require_once 'views/login.php';
}
// Proses autentikasi
public function login() {
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
$user = $this->userModel->getUserByUsername($username);
// Cek user dan cocokkan password (tanpa enkripsi / plain text)
// PERINGATAN: Di aplikasi nyata, gunakan password_verify()
if ($user && $password === $user['password']) {
// Set Session
$_SESSION['user_id'] = $user['id'];
$_SESSION['nama_lengkap'] = $user['nama_lengkap'];
header("Location: index.php?action=dashboard");
exit;
} else {
$error_message = "Username atau Password salah!";
require_once 'views/login.php';
}
}
}
// Proses Logout
public function logout() {
session_destroy();
header("Location: index.php");
exit;
}
}
?>