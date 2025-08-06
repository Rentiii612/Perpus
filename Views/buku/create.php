<h2>Tambah Buku</h2>
<link rel="stylesheet" type="text/css" href="public/style.css">

<form method="post" action="index.php?page=buku-store">
    <label>Buku_id</label><br>
    <input type="text" name="buku_id" required><br><br>

    <label>Kategori_id</label><br>
    <input type="text" name="kategori_id" required><br><br>

    <label>Nama buku</label><br>
    <input type="text" name="nama_buku" required><br><br>

    <label>Judul</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Penulis</label><br>
    <input type="text" name="penulis" required><br><br>

    <label>Penerbit</label><br>
    <input type="text" name="penerbit" required><br><br>

    <label>Tahun Terbit</label><br>
    <input type="number" name="tahun_terbit" required><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" required><br><br>

    <button type="submit">Simpan</button>
</form>
