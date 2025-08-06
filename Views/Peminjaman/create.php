<h2>Tambah Peminjaman</h2>
<link rel="stylesheet" type="text/css" href="public/style.css">
<form method="post" action="?page=peminjaman-store">
    <label>ID Peminjaman:</label><br>
    <input type="text" name="peminjaman_id" required><br><br>

    <label>ID Anggota:</label><br>
    <input type="text" name="anggota_id" required><br><br>


    <label>ID Buku:</label><br>
    <input type="text" name="buku_id" required><br><br>


    <label>ID Petugas:</label><br>
    <input type="text" name="petugas_id" required><br><br>

    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tanggal_pinjam" required><br><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tanggal_kembali" required><br><br>

    <label>Status:</label><br>
    <select name="status" required>
        <option value="Dipinjam">Dipinjam</option>
        <option value="Dikembalikan">Dikembalikan</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
