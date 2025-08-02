<?php
require_once './config/database.php';

class PeminjamanModel {
    public function getAll() {
        global $pdo;
        $stmt = $pdo->query("
            SELECT peminjaman.id, anggota.nama AS nama_anggota, buku.judul AS judul_buku, peminjaman.tanggal_pinjam, peminjaman.tanggal_kembali
            FROM peminjaman
            JOIN anggota ON peminjaman.id_anggota = anggota.id
            JOIN buku ON peminjaman.id_buku = buku.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO peminjaman (id_anggota, id_buku, tanggal_pinjam, tanggal_kembali) VALUES (?, ?, ?, ?)");
        $stmt->execute([$data['id_anggota'], $data['id_buku'], $data['tanggal_pinjam'], $data['tanggal_kembali']]);
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM peminjaman WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
