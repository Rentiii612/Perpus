<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Anggota</title>
    <link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<body>

<form action="index.php?page=anggota-store" method="post">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Alamat:</label>
    <textarea name="alamat" required></textarea>

    <label>Nomor Telepon:</label>
    <input type="text" name="nomor_telepon" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Tanggal Bergabung:</label>
    <input type="date" name="tanggal_bergabung" required>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
