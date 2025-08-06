<h2>Daftar Buku</h2>
<link rel="stylesheet" type="text/css" href="public/style.css">
<a href="index.php?page=buku-create">+ Tambah Buku</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Buku_id</th>
            <th>Kategori_id</th>
            <th>Nama buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun terbit</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($buku && $buku->num_rows > 0) : ?>
            <?php while ($item = $buku->fetch_assoc()) : ?>
                <tr>
                    <td><?= htmlspecialchars($item['buku_id']) ?></td>
                    <td><?= htmlspecialchars($item['kategori_id']) ?></td>
                    <td><?= htmlspecialchars($item['nama_buku']) ?></td>
                    <td><?= htmlspecialchars($item['judul']) ?></td>
                    <td><?= htmlspecialchars($item['penulis']) ?></td>
                    <td><?= htmlspecialchars($item['penerbit']) ?></td>
                    <td><?= htmlspecialchars($item['tahun_terbit']) ?></td>
                    <td><?= htmlspecialchars($item['jumlah_tersedia']) ?></td>
                    <td>
                        <a href="?page=buku-edit&id=<?= $item['buku_id'] ?>">Edit</a> |
                        <a href="?page=buku-delete&id=<?= $item['buku_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                    </td>

                </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <tr>
                <td colspan="8">Tidak ada data buku.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
