<?php
$koneksi = new mysqli("localhost", "root", "", "Perpus");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
