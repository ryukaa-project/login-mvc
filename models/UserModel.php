<?php
// File: models/UserModel.php
class UserModel {
private $conn;
private $table_name = "users";
public function __construct($db) {
$this->conn = $db;
}
// Fungsi untuk mengambil data user berdasarkan username
public function getUserByUsername($username) {
$query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
$stmt = $this->conn->prepare($query);
// Membersihkan input
$username = htmlspecialchars(strip_tags($username));
$stmt->bindParam(':username', $username);
$stmt->execute();
if($stmt->rowCount() > 0) {
return $stmt->fetch(PDO::FETCH_ASSOC);
}
return false;
}
}
?>