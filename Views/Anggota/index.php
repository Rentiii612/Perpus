<h2>Daftar Anggota</h2>
<a href="?page=anggota-create">+ Tambah Anggota</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($anggota as $a): ?>
    <tr>
        <td><?= $a['nama'] ?></td>
        <td><?= $a['nim'] ?></td>
        <td><?= $a['jurusan'] ?></td>
        <td>
            <a href="?page=anggota-edit&id=<?= $a['id'] ?>">Edit</a> |
            <a href="?page=anggota-delete&id=<?= $a['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
