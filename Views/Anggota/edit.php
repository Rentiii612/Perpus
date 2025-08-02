<h2>Edit Anggota</h2>
<form method="post" action="?page=anggota-update&id=<?= $anggota['id'] ?>">
    <label>Nama: <input type="text" name="nama" value="<?= $anggota['nama'] ?>" required></label><br>
    <label>NIM: <input type="text" name="nim" value="<?= $anggota['nim'] ?>" required></label><br>
    <label>Jurusan: <input type="text" name="jurusan" value="<?= $anggota['jurusan'] ?>" required></label><br>
    <button type="submit">Update</button>
</form>
