<?php
require_once './config/database.php';

class BukuModel {
    public function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM buku");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM buku WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO buku (judul, pengarang, tahun, kategori) VALUES (?, ?, ?, ?)");
        $stmt->execute([$data['judul'], $data['pengarang'], $data['tahun'], $data['kategori']]);
    }

    public function update($id, $data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE buku SET judul = ?, pengarang = ?, tahun = ?, kategori = ? WHERE id = ?");
        $stmt->execute([$data['judul'], $data['pengarang'], $data['tahun'], $data['kategori'], $id]);
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM buku WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
