<?php
require_once __DIR__ . '/../config/database.php';


class PeminjamanController {
    public static function index() {
        global $conn;
        $query = "SELECT * FROM peminjaman";
        $result = mysqli_query($conn, $query);
        include '../peminjaman/tampil.php';
    }

    public static function create() {
        include '../peminjaman/tambah.php';
    }

    public static function store($data) {
        global $conn;
        $id_anggota = $data['id_anggota'];
        $id_buku = $data['id_buku'];
        $tgl_pinjam = $data['tgl_pinjam'];
        $tgl_kembali = $data['tgl_kembali'];
        $query = "INSERT INTO peminjaman (id_anggota, id_buku, tgl_pinjam, tgl_kembali) 
                  VALUES ($id_anggota, $id_buku, '$tgl_pinjam', '$tgl_kembali')";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=peminjaman&action=index");
    }

    public static function edit($id) {
        global $conn;
        $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
        $result = mysqli_query($conn, $query);
        $peminjaman = mysqli_fetch_assoc($result);
        include '../peminjaman/edit.php';
    }

    public static function update($id, $data) {
        global $conn;
        $id_anggota = $data['id_anggota'];
        $id_buku = $data['id_buku'];
        $tgl_pinjam = $data['tgl_pinjam'];
        $tgl_kembali = $data['tgl_kembali'];
        $query = "UPDATE peminjaman SET id_anggota=$id_anggota, id_buku=$id_buku, tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'
                  WHERE id_peminjaman=$id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=peminjaman&action=index");
    }

    public static function delete($id) {
        global $conn;
        $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
        mysqli_query($conn, $query);
        header("Location: index.php?controller=peminjaman&action=index");
    }
}
?>