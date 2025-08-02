<?php
$host = 'localhost';     // ganti jika berbeda
$dbname = 'Perpus'; // sesuaikan dengan nama database MySQL kamu
$user = 'root';          // default user XAMPP
$pass = '';              // default kosong (jika pakai password, isikan di sini)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
