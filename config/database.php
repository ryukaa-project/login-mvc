<?php
// File: config/Database.php
class Database {
// CATATAN KEAMANAN: Untuk aplikasi level produksi (production),
// kredensial database tidak boleh di-hardcode seperti ini.
// Gunakan Environment Variables (seperti file .env) demi keamanan.
private $host = "localhost";
private $db_name = "db_rai_login";
private $username = "root"; // Sesuaikan dengan user MySQL Anda
private $password = ""; // Sesuaikan dengan pass MySQL Anda
public $conn;
public function getConnection() {
$this->conn = null;
try {
$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
echo "Koneksi Database Gagal: " . $exception->getMessage();
}
return $this->conn;
}
}
?>