<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page = $_GET['page'] ?? 'home';

switch ($page) {
    // Routing untuk Buku
    case 'buku':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->index();
        break;
    case 'buku-create':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->create();
        break;
    case 'buku-store':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->store($_POST);
        break;
    case 'buku-edit':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->edit($_GET['id']);
        break;
    case 'buku-update':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->update($_GET['id'], $_POST);
        break;
    case 'buku-delete':
        require_once './Controller/BukuController.php';
        $controller = new BukuController();
        $controller->delete($_GET['id']);
        break;

    // Routing untuk Anggota
    case 'anggota':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->index();
        break;
    case 'anggota-create':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->create();
        break;
    case 'anggota-store':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->store($_POST);
        break;
    case 'anggota-edit':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->edit($_GET['id']);
        break;
    case 'anggota-update':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->update($_GET['id'], $_POST);
        break;
    case 'anggota-delete':
        require_once './Controller/AnggotaController.php';
        $controller = new AnggotaController();
        $controller->delete($_GET['id']);
        break;

    // Routing untuk Peminjaman
    case 'peminjaman':
        require_once './Controller/PeminjamanController.php';
        $controller = new PeminjamanController();
        $controller->index();
        break;
    case 'peminjaman-create':
        require_once './Controller/PeminjamanController.php';
        $controller = new PeminjamanController();
        $controller->create();
        break;
    case 'peminjaman-store':
        require_once './Controller/PeminjamanController.php';
        $controller = new PeminjamanController();
        $controller->store($_POST);
        break;
    case 'peminjaman-delete':
        require_once './Controller/PeminjamanController.php';
        $controller = new PeminjamanController();
        $controller->delete($_GET['id']);
        break;

    // Halaman Beranda (default)
   default:
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Perpustakaan</title>
        <link rel="stylesheet" type="text/css" href="public/style.css">
    </head>
    <body>
        <h2>Selamat datang di perpustakaan universitas MAROMAK OAN 📚</h2>
        <ul>
            <li><a href="?page=buku">Data Buku</a></li>
            <li><a href="?page=anggota">Daftar Anggota</a></li>
            <li><a href="?page=peminjaman">Kelola Peminjaman</a></li>
        </ul>
    </body>
    </html>';
    break;

}
