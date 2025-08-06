<?php
require_once __DIR__ . '/../models/Bukumodel.php';

class Bukucontroller
{
    public static function index()
    {
        $model = new Bukumodel();
        $buku = $model->getAll(); // Ambil semua data buku
        require_once __DIR__ . '/../Views/buku/index.php'; // Tampilkan ke view
    }

    public static function create()
    {
        require_once __DIR__ . '/../Views/buku/create.php';
    }

    public static function store()
    {
        $data = [
            'buku_id' => $_POST['buku_id'],
            'kategori_id' => $_POST['kategori_id'],
            'nama_buku' => $_POST['nama_buku'],
            'judul' => $_POST['judul'],
            'penulis' => $_POST['penulis'],
            'penerbit' => $_POST['penerbit'],
            'tahun_terbit' => $_POST['tahun_terbit'],
            'stok' => $_POST['jumlah_tersedia']
        ];

        $model = new Bukumodel();
        $model->insert($data);

        header("Location: index.php?page=buku&aksi=index");
        exit();
    }

    public static function edit($id) {
        $model = new Bukumodel();
        $data = $model->getById($id);
        include __DIR__ . '/../Views/buku/edit.php';
    }

    public static function update($id) {
        $model = new Bukumodel();
        $model->update($id, $_POST);
        header("Location: index.php?page=buku&aksi=index");
        exit;
    }

    public static function delete($id)
    {
        $model = new Bukumodel();
        $model->delete($id);
        header("Location: index.php?page=buku&aksi=index");
        exit();
    }
}
?>
