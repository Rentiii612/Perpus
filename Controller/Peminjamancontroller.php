<?php
require_once __DIR__ . '/../config.php';

class PeminjamanController {

    public static function index() {
        global $conn;
        $query = "SELECT * FROM peminjaman";
        $result = mysqli_query($conn, $query);

        // ✅ Tambahan agar data bisa dikirim ke view
        $peminjaman = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $peminjaman[] = $row;
        }

        include __DIR__ . '/../Views/Peminjaman/index.php';
    }

    public static function create() {
        include __DIR__ . '/../Views/Peminjaman/create.php';
    }

    public static function store($data) {
    global $conn;

    $id_anggota = mysqli_real_escape_string($conn, $data['anggota_id']);
    $id_buku = mysqli_real_escape_string($conn, $data['buku_id']);
    $id_petugas = mysqli_real_escape_string($conn, $data['petugas_id']);
    $tanggal_pinjam = mysqli_real_escape_string($conn, $data['tanggal_pinjam']);
    $tanggal_kembali = mysqli_real_escape_string($conn, $data['tanggal_kembali']);
    $status = mysqli_real_escape_string($conn, $data['status']);

   $query = "INSERT INTO peminjaman (anggota_id, buku_id, petugas_id, tanggal_pinjam, tanggal_kembali, status) 
          VALUES ('$id_anggota', '$id_buku', '$id_petugas', '$tanggal_pinjam', '$tanggal_kembali', '$status')";


    if (mysqli_query($conn, $query)) {
        header("Location: index.php?controller=peminjaman&action=index");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}

    public static function detail($id) {
        global $conn;

        $id = mysqli_real_escape_string($conn, $id);
        $query = "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $peminjaman = mysqli_fetch_assoc($result);
            include __DIR__ . '/../Views/Peminjaman/detail.php';
        } else {
            echo "Data tidak ditemukan.";
        }
    }

    public static function delete($id) {
        global $conn;

        $id = mysqli_real_escape_string($conn, $id);
        $query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id'";
        mysqli_query($conn, $query);

        header("Location: index.php?controller=peminjaman&action=index");
        exit;
    }
}
?>
