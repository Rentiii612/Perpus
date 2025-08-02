<?php
require_once __DIR__ . '/../config/database.php';

class BukuController {
    public static function index() {
        global $conn;
        $query = "SELECT * FROM buku";
        $result = mysqli_query($conn, $query);
        include '../buku/tampil.php';
    }

    public static function create() {
        include '../buku/tambah.php';
    }

    public static function store($data) {
        global $conn;
        $judul = $data['judul'];
        $pengarang = $data['pengarang'];
        $id_kategori = $data['id_kategori'];
        $query = "INSERT INTO buku (judul, pengarang, id_kategori) VALUES ('$judul', '$pengarang', $id_kategori)";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=buku&action=index");
    }

    public static function edit($id) {
        global $conn;
        $query = "SELECT * FROM buku WHERE id_buku = $id";
        $result = mysqli_query($conn, $query);
        $buku = mysqli_fetch_assoc($result);
        include '../buku/edit.php';
    }

    public static function update($id, $data) {
        global $conn;
        $judul = $data['judul'];
        $pengarang = $data['pengarang'];
        $id_kategori = $data['id_kategori'];
        $query = "UPDATE buku SET judul='$judul', pengarang='$pengarang', id_kategori=$id_kategori WHERE id_buku=$id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=buku&action=index");
    }

    public static function delete($id) {
        global $conn;
        $query = "DELETE FROM buku WHERE id_buku = $id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=buku&action=index");
    }
}
?>