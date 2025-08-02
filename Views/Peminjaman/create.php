<h2>Tambah Peminjaman</h2>
<form method="post" action="?page=peminjaman-store">
    <label>Anggota:</label>
    <select name="id_anggota">
        <?php foreach ($anggota as $a): ?>
            <option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>Buku:</label>
    <select name="id_buku">
        <?php foreach ($buku as $b): ?>
            <option value="<?= $b['id'] ?>"><?= $b['judul'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>Tanggal Pinjam: <input type="date" name="tanggal_pinjam"></label><br>
    <label>Tanggal Kembali: <input type="date" name="tanggal_kembali"></label><br>

    <button type="submit">Simpan</button>
</form>
