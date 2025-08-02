<?php
require_once __DIR__ . '/../Models/Anggotamodel.php'; // path absolut relatif ke file ini

class Anggotacontroller {
    public static function index() {
        $anggota = Anggotamodel::getAll();
        include __DIR__ . '/../Views/Anggota/tampil.php';
    }

    public static function create() {
        include __DIR__ . '/../Views/Anggota/tambah.php';
    }

    public static function store($data) {
        Anggotamodel::insert($data);
        header("Location: index.php?controller=anggota&action=index");
    }

    public static function edit($id) {
        $anggota = Anggotamodel::getById($id);
        include __DIR__ . '/../Views/Anggota/edit.php';
    }

    public static function update($id, $data) {
        Anggotamodel::update($id, $data);
        header("Location: index.php?controller=anggota&action=index");
    }

    public static function delete($id) {
        Anggotamodel::delete($id);
        header("Location: index.php?controller=anggota&action=index");
    }
}
?>