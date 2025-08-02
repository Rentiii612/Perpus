<?php
require_once './config/database.php';

class AnggotaModel {
    public function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM anggota");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM anggota WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO anggota (nama, nim, jurusan) VALUES (?, ?, ?)");
        $stmt->execute([$data['nama'], $data['nim'], $data['jurusan']]);
    }

    public function update($id, $data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE anggota SET nama = ?, nim = ?, jurusan = ? WHERE id = ?");
        $stmt->execute([$data['nama'], $data['nim'], $data['jurusan'], $id]);
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM anggota WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
