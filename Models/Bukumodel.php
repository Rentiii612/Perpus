<?php
require_once './config.php';

class Bukumodel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "perpus");
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM buku";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM buku WHERE buku_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insert($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        $stmt = $this->conn->prepare("INSERT INTO buku (
            buku_id, kategori_id, nama_buku, judul, penulis, penerbit, tahun_terbit, jumlah_tersedia
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("❌ Prepare gagal: " . $this->conn->error);
        }

        $stmt->bind_param(
            "iissssii",
            $data['buku_id'],
            $data['kategori_id'],
            $data['nama_buku'],
            $data['judul'],
            $data['penulis'],
            $data['penerbit'],
            $data['tahun_terbit'],
            $data['stok'] // ini akan masuk ke kolom jumlah_tersedia
        );

        if ($stmt->execute()) {
            echo "✅ Data berhasil disimpan!";
        } else {
            die("❌ Gagal simpan: " . $stmt->error);
        }
    }

    public function update($id, $data) {
        $stmt = $this->conn->prepare("UPDATE buku SET 
            kategori_id = ?, 
            nama_buku = ?, 
            judul = ?, 
            penulis = ?, 
            penerbit = ?, 
            tahun_terbit = ?, 
            jumlah_tersedia = ? 
            WHERE buku_id = ?");

        $stmt->bind_param(
            "issssiii",
            $data['kategori_id'],
            $data['nama_buku'],
            $data['judul'],
            $data['penulis'],
            $data['penerbit'],
            $data['tahun_terbit'],
            $data['stok'],
            $id
        );

        if ($stmt->execute()) {
            echo "✅ Data berhasil diperbarui!";
        } else {
            die("❌ Gagal update: " . $stmt->error);
        }
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM buku WHERE buku_id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "✅ Data berhasil dihapus!";
        } else {
            die("❌ Gagal hapus: " . $stmt->error);
        }
    }
}
?>
