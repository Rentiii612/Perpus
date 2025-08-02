<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    // Routing untuk Buku
    case 'buku':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->index();
        break;
    case 'buku-create':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->create();
        break;
    case 'buku-store':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->store();
        break;
    case 'buku-edit':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->edit($_GET['id']);
        break;
    case 'buku-update':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->update($_GET['id']);
        break;
    case 'buku-delete':
        require_once './Controller/Bukucontroller.php';
        $controller = new BukuController();
        $controller->delete($_GET['id']);
        break;

    // Routing untuk Anggota
    case 'anggota':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->index();
        break;
    case 'anggota-create':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->create();
        break;
    case 'anggota-store':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->store();
        break;
    case 'anggota-edit':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->edit($_GET['id']);
        break;
    case 'anggota-update':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->update($_GET['id']);
        break;
    case 'anggota-delete':
        require_once './Controller/Anggotacontroller.php';
        $controller = new AnggotaController();
        $controller->delete($_GET['id']);
        break;

    // Routing untuk Peminjaman
    case 'peminjaman':
        require_once './Controller/Peminjamancontroller.php';
        $controller = new PeminjamanController();
        $controller->index();
        break;
    case 'peminjaman-create':
        require_once './Controller/Peminjamancontroller.php';
        $controller = new PeminjamanController();
        $controller->create();
        break;
    case 'peminjaman-store':
        require_once './Controller/Peminjamancontroller.php';
        $controller = new PeminjamanController();
        $controller->store();
        break;
    case 'peminjaman-delete':
        require_once './Controller/Peminjamancontroller.php';
        $controller = new PeminjamanController();
        $controller->delete($_GET['id']);
        break;

    // Halaman Beranda (default)
    default:
        echo "<h2>Selamat datang di perpustakaan universitas MAROMAK OAN 📚</h2>";
        echo "<ul>
                <li><a href='?page=buku'>Data Buku</a></li>
                <li><a href='?page=anggota'>Daftar Anggota</a></li>
                <li><a href='?page=peminjaman'>Kelola Peminjaman</a></li>
              </ul>";
        break;
}
?>
