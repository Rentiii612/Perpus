<h2>Daftar Buku</h2>
<a href="?page=buku-create">+ Tambah Buku</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($buku as $b): ?>
    <tr>
        <td><?= $b['judul'] ?></td>
        <td><?= $b['pengarang'] ?></td>
        <td><?= $b['tahun'] ?></td>
        <td><?= $b['kategori'] ?></td>
        <td>
            <a href="?page=buku-edit&id=<?= $b['id'] ?>">Edit</a> |
            <a href="?page=buku-delete&id=<?= $b['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
