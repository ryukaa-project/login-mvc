<?php
// File: index.php
session_start();
// Catatan Teori Keamanan: Untuk mencegah serangan Session Fixation,
// sangat disarankan mengeksplorasi penggunaan session_regenerate_id(true);
// saat status autentikasi pengguna berubah (misal: tepat setelah berhasil login)
require_once 'config/Database.php';
require_once 'controllers/AuthController.php';
// Inisialisasi Database
$database = new Database();
$db = $database->getConnection();
// Inisialisasi Controller
$authController = new AuthController($db);
// Simple Routing (Menangkap aksi di URL)
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
case 'loginProcess':
$authController->login();
break;
case 'dashboard':
// Cek apakah user sudah login sebelum mengakses dashboard
if (!isset($_SESSION['user_id'])) {
header("Location: index.php");
exit;
}
require_once 'views/dashboard.php';
break;
case 'logout':
$authController->logout();
break;
default:
// Halaman default adalah form login
$authController->index();
break;
}
?>