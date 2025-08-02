<h2>Daftar Peminjaman</h2>
<a href="?page=peminjaman-create">+ Tambah Peminjaman</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Anggota</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman as $p): ?>
    <tr>
        <td><?= $p['nama_anggota'] ?></td>
        <td><?= $p['judul_buku'] ?></td>
        <td><?= $p['tanggal_pinjam'] ?></td>
        <td><?= $p['tanggal_kembali'] ?></td>
        <td>
            <a href="?page=peminjaman-delete&id=<?= $p['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
