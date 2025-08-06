<?php
require_once __DIR__ . '/../Models/Anggotamodel.php';

class Anggotacontroller {

    public static function index() {
        $result = Anggotamodel::getAll();
        $anggota = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $anggota[] = $row;
            }
        }

        include __DIR__ . '/../Views/Anggota/index.php';
    }

    public static function create() {
        include __DIR__ . '/../Views/Anggota/create.php';
    }

    // ✅ Diperbaiki sesuai struktur tabel anggota
   public static function store() {
    require_once './config.php';

    $data = [
        'nama'              => $_POST['nama'],
        'alamat'            => $_POST['alamat'],
        'nomor_telepon'     => $_POST['nomor_telepon'],
        'email'             => $_POST['email'],
        'tanggal_bergabung' => $_POST['tanggal_bergabung']
    ];

    if (Anggotamodel::insert($data)) {
        header("Location: index.php?page=anggota");
        exit();
    } else {
        echo "Gagal menambahkan anggota.";
    }
}

   public static function edit($id) {
    $anggota = Anggotamodel::getById($id);

    if (!$anggota) {
        echo "Data anggota tidak ditemukan untuk ID: $id";
        exit;
    }

    include __DIR__ . '/../Views/Anggota/edit.php';
}

    public static function update($id) {
        Anggotamodel::update($id, $_POST);
        header('Location: index.php?page=anggota');
        exit;
    }

    public static function delete($id) {
        Anggotamodel::delete($id);
        header('Location: index.php?page=anggota');
        exit;
    }
}
