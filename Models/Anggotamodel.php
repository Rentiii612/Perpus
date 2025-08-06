<?php

// Pastikan koneksi database dimuat
require_once __DIR__ . '/../config.php';

class Anggotamodel {

    public static function getAll() {
        global $conn;
        $query = "SELECT * FROM anggota";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // ❌ Versi LAMA - Biar tetap ada, tapi tidak dipakai
    public static function getById_Lama($id)
    {
        global $conn;
        $id = intval($id);
        $query = "SELECT * FROM anggota WHERE id = $id"; // SALAH: 'id'
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query getById_Lama gagal: " . mysqli_error($conn));
        }

        return mysqli_fetch_assoc($result);
    }

    // ✅ Versi BENAR yang dipakai sistem
    public static function getById($id)
    {
        global $conn;
        $id = intval($id);
        $query = "SELECT * FROM anggota WHERE anggota_id = $id"; // BENAR: 'anggota_id'
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query getById gagal: " . mysqli_error($conn));
        }

        return mysqli_fetch_assoc($result);
    }

    public static function insert($data)
    {
        global $conn;

        $nama              = mysqli_real_escape_string($conn, $data['nama']);
        $alamat            = mysqli_real_escape_string($conn, $data['alamat']);
        $nomor_telepon     = mysqli_real_escape_string($conn, $data['nomor_telepon']);
        $email             = mysqli_real_escape_string($conn, $data['email']);
        $tanggal_bergabung = mysqli_real_escape_string($conn, $data['tanggal_bergabung']);

        $query = "
            INSERT INTO anggota (nama, alamat, nomor_telepon, email, tanggal_bergabung)
            VALUES ('$nama', '$alamat', '$nomor_telepon', '$email', '$tanggal_bergabung')
        ";

        return mysqli_query($conn, $query);
    }

    public static function update($id, $data)
    {
        global $conn;

        $id = intval($id);
        $nama = mysqli_real_escape_string($conn, $data['nama']);
        $alamat = mysqli_real_escape_string($conn, $data['alamat']);

        $query = "UPDATE anggota SET nama='$nama', alamat='$alamat' WHERE anggota_id=$id"; // Ubah id ➜ anggota_id
        return mysqli_query($conn, $query);
    }

    public static function delete($id)
    {
        global $conn;
        $id = intval($id);

        $query = "DELETE FROM anggota WHERE anggota_id = $id"; // Ubah id ➜ anggota_id
        return mysqli_query($conn, $query);
    }

    // Tambahan opsional lain tetap boleh ada
    public static function getByAnggotaId($id) {
        global $conn;
        $id = intval($id);
        $query = "SELECT * FROM anggota WHERE anggota_id = $id";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    }

    public static function updateByAnggotaId($id, $data) {
        global $conn;

        $id = intval($id);
        $nama = mysqli_real_escape_string($conn, $data['nama']);
        $alamat = mysqli_real_escape_string($conn, $data['alamat']);
        $nomor_telepon = mysqli_real_escape_string($conn, $data['nomor_telepon']);
        $email = mysqli_real_escape_string($conn, $data['email']);
        $tanggal_bergabung = mysqli_real_escape_string($conn, $data['tanggal_bergabung']);

        $query = "UPDATE anggota SET 
                    nama = '$nama',
                    alamat = '$alamat',
                    nomor_telepon = '$nomor_telepon',
                    email = '$email',
                    tanggal_bergabung = '$tanggal_bergabung'
                  WHERE anggota_id = $id";

        return mysqli_query($conn, $query);
    }
}
