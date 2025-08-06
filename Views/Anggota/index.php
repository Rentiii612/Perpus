<h2 style="font-family: Arial; color: #333;">Daftar Anggota</h2>
<link rel="stylesheet" type="text/css" href="public/style.css">
<a href="index.php?page=anggota-create">+ Tambah Anggota</a>

<table border="1" cellpadding="10" cellspacing="0" 
       style="border-collapse: collapse; width: 100%; font-family: Arial; text-align: left;">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Tanggal bergabung</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($anggota)): ?>
            <?php foreach ($anggota as $a): ?>
                <tr>
                    <td><?= htmlspecialchars($a['nama']) ?></td>
                    <td><?= htmlspecialchars($a['alamat']) ?></td>
                    <td><?= htmlspecialchars($a['nomor_telepon']) ?></td>
                    <td><?= htmlspecialchars($a['email']) ?></td>
                    <td><?= htmlspecialchars($a['tanggal_bergabung']) ?></td>
                    <td>
                       <a href="index.php?page=anggota-edit&id=<?= $a['anggota_id'] ?>">Edit</a>
                       <a href="index.php?page=anggota-delete&id=<?= $a['anggota_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data anggota.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
