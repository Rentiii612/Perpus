<?php
require_once 'Models/Bukumodel.php';
$model = new Bukumodel();

// Ambil ID dan data buku
$id = $_GET['id'] ?? null;
$data = $model->getById($id);

// Validasi data
if (!$data) {
    echo "<p>Data buku tidak ditemukan.</p>";
    return;
}
?>

<h2>Edit Buku</h2>

<form method="post" action="index.php?page=buku-update&id=<?= htmlspecialchars($data['buku_id']) ?>">
     <label>
        Buku_id:<br>
        <input type="text" name="buku_id" value="<?= htmlspecialchars($data['buku_id']) ?>" required>
    </label><br><br>

     <label>
        Kategori_id:<br>
        <input type="text" name="kategori_id" value="<?= htmlspecialchars($data['kategori_id']) ?>" required>
    </label><br><br>
    
    <label>
        Nama Buku:<br>
        <input type="text" name="nama_buku" value="<?= htmlspecialchars($data['nama_buku']) ?>" required>
    </label><br><br>

    <label>
        Judul:<br>
        <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required>
    </label><br><br>

    <label>
        Penulis:<br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($data['penulis']) ?>" required>
    </label><br><br>

    <label>
        Penerbit:<br>
        <input type="text" name="penerbit" value="<?= htmlspecialchars($data['penerbit']) ?>" required>
    </label><br><br>

    <label>
        Tahun Terbit:<br>
        <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($data['tahun_terbit']) ?>" required>
    </label><br><br>

    <label>
        Stok:<br>
        <input type="number" name="stok" value="<?= htmlspecialchars($data['jumlah_tersedia']) ?>" required>
    </label><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
