<h2>Edit Buku</h2>
<form method="post" action="?page=buku-update&id=<?= $buku['id'] ?>">
    <label>Judul: <input type="text" name="judul" value="<?= $buku['judul'] ?>" required></label><br>
    <label>Pengarang: <input type="text" name="pengarang" value="<?= $buku['pengarang'] ?>" required></label><br>
    <label>Tahun: <input type="number" name="tahun" value="<?= $buku['tahun'] ?>" required></label><br>
    <label>Kategori: <input type="text" name="kategori" value="<?= $buku['kategori'] ?>" required></label><br>
    <button type="submit">Update</button>
</form>
