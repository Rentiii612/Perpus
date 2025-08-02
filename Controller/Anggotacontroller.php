<?php
require_once __DIR__ . '/../config/database.php';


class AnggotaController {
    public static function index() {
        global $conn;
        $query = "SELECT * FROM anggota";
        $result = mysqli_query($conn, $query);
        include '../Anggota/tampil.php';
    }

    public static function create() {
        include '../Anggota/tambah.php';
    }

    public static function store($data) {
        global $conn;
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $query = "INSERT INTO anggota (nama, alamat) VALUES ('$nama', '$alamat')";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=anggota&action=index");
    }

    public static function edit($id) {
        global $conn;
        $query = "SELECT * FROM anggota WHERE id_anggota = $id";
        $result = mysqli_query($conn, $query);
        $anggota = mysqli_fetch_assoc($result);
        include '../Anggota/edit.php';
    }

    public static function update($id, $data) {
        global $conn;
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $query = "UPDATE anggota SET nama='$nama', alamat='$alamat' WHERE id_anggota=$id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=anggota&action=index");
    }

    public static function delete($id) {
        global $conn;
        $query = "DELETE FROM anggota WHERE id_anggota = $id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=anggota&action=index");
    }
}
?>