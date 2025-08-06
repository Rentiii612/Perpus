<h2>Daftar Peminjaman</h2>
 <link rel="stylesheet" type="text/css" href="public/style.css">
<a href="?page=peminjaman-create">+ Tambah Peminjaman</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Peminjaman_id</th>
        <th>Anggota_id</th>
        <th>Buku_id</th>
        <th>Petugas_id</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php if (isset($peminjaman) && is_array($peminjaman)): ?>
        <?php foreach ($peminjaman as $p): ?>
        <tr>
            <td><?= $p['peminjaman_id'] ?></td>
            <td><?= $p['anggota_id'] ?></td>
            <td><?= $p['buku_id'] ?></td>
            <td><?= $p['petugas_id'] ?></td>
            <td><?= $p['tanggal_pinjam'] ?></td>
            <td><?= $p['tanggal_kembali'] ?></td>
            <td><?= $p['status'] ?></td>
            <td>
                <a href="?page=peminjaman-detail&id=<?= $row['id'] ?>">Detail</a> |
                <a href="?page=peminjaman-edit&id=<?= $row['id'] ?>">Edit</a> |
                <a href="?page=peminjaman-delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Tidak ada data peminjaman.</td>
        </tr>
    <?php endif; ?>
</table>
