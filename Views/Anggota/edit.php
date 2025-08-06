<h2>Edit Anggota</h2>

<?php if (!$anggota): ?>
    <p style="color: red;">Data anggota tidak ditemukan.</p>
<?php else: ?>
    <form method="post" action="?page=anggota-update&id=<?= $anggota['anggota_id'] ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($anggota['nama'] ?? '') ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" rows="4" required><?= htmlspecialchars($anggota['alamat'] ?? '') ?></textarea><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="nomor_telepon" value="<?= htmlspecialchars($anggota['nomor_telepon'] ?? '') ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($anggota['email'] ?? '') ?>" required><br><br>

        <label>Tanggal Bergabung:</label><br>
        <input type="date" name="tanggal_bergabung" value="<?= htmlspecialchars($anggota['tanggal_bergabung'] ?? '') ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
<?php endif; ?>
