CREATE DATABASE Perpus;
USE perpustakaankami;

CREATE TABLE kategori_buku (
    kategori_id INT PRIMARY KEY AUTO_INCREMENT,
    nama_kategori VARCHAR(100),
    deskripsi TEXT
);

CREATE TABLE buku (
    buku_id INT PRIMARY KEY AUTO_INCREMENT,
    kategori_id INT,
    nama_buku VARCHAR(150),
    judul VARCHAR(150),
    penulis VARCHAR(100),
    penerbit VARCHAR(100),
    tahun_terbit YEAR,
    jumlah_tersedia INT,
    FOREIGN KEY (kategori_id) REFERENCES kategori_buku(kategori_id)
);

CREATE TABLE anggota (
    anggota_id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    alamat TEXT,
    nomor_telepon VARCHAR(20),
    email VARCHAR(100),
    tanggal_bergabung DATE
);

CREATE TABLE petugas (
    petugas_id INT PRIMARY KEY AUTO_INCREMENT,
    nama_petugas VARCHAR(100),
    position VARCHAR(50),
    nomor_telepon VARCHAR(20),
    email VARCHAR(100)
);

CREATE TABLE peminjaman (
    peminjaman_id INT PRIMARY KEY AUTO_INCREMENT,
    anggota_id INT,
    buku_id INT,
    petugas_id INT,
    tanggal_pinjam DATE,
    tanggal_kembali DATE,
    status VARCHAR(20),
    FOREIGN KEY (anggota_id) REFERENCES anggota(anggota_id),
    FOREIGN KEY (buku_id) REFERENCES buku(buku_id),
    FOREIGN KEY (petugas_id) REFERENCES petugas(petugas_id)
);

INSERT INTO kategori_buku (nama_kategori, deskripsi) VALUES
('Fiksi', 'Buku-buku cerita fiksi seperti novel, cerpen, dll'),
('Non-Fiksi', 'Buku ilmiah, sejarah, biografi, dll'),
('Teknologi', 'Buku terkait teknologi dan komputer'),
('Pendidikan', 'Buku untuk pembelajaran dan edukasi'),
('Anak-anak', 'Buku bacaan untuk anak-anak');

INSERT INTO buku (kategori_id, nama_buku, judul, penulis, penerbit, tahun_terbit, jumlah_tersedia) VALUES
(1, 'Laskar Pelangi', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 10),
(1, 'Bumi', 'Bumi', 'Tere Liye', 'Gramedia', 2014, 8),
(2, 'Biografi Soekarno', 'Bung Karno', 'Cindy Adams', 'Yayasan Bung Karno', 1985, 5),
(3, 'Belajar PHP', 'Pemrograman PHP', 'Yuda Pratama', 'Informatika Bandung', 2020, 12),
(3, 'Dasar-Dasar HTML', 'HTML Pemula', 'Andi Setiawan', 'Elex Media', 2019, 7),
(4, 'Matematika Kelas 10', 'Matematika Dasar', 'Depdikbud', 'Erlangga', 2022, 20),
(4, 'Fisika SMA', 'Fisika Listrik', 'Budi Santoso', 'Erlangga', 2021, 13),
(2, 'Sejarah Indonesia', 'Indonesia Merdeka', 'R. Djoko', 'Balai Pustaka', 2003, 9),
(5, 'Dongeng Nusantara', 'Cerita Anak', 'Nina Marlina', 'Kita Buku', 2017, 15),
(1, 'Negeri 5 Menara', 'Menara', 'Ahmad Fuadi', 'Gramedia', 2009, 11),
(2, 'Psikologi Remaja', 'Masa Remaja', 'Dr. Ari Pratama', 'UI Press', 2015, 6),
(3, 'Panduan MySQL', 'MySQL Dasar', 'Y. Hendra', 'Informatika', 2021, 10),
(1, 'Ayat-Ayat Cinta', 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 7),
(4, 'Bahasa Indonesia Kelas 11', 'B. Indonesia SMA', 'Kemdikbud', 'Erlangga', 2020, 14),
(5, 'Kumpulan Lagu Anak', 'Lagu Ceria', 'Fitri Hadi', 'Tunas Harapan', 2010, 18);

