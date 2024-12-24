<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'smartkidz';
$user = 'root'; // Sesuaikan dengan username MySQL Anda
$password = ''; // Sesuaikan dengan password MySQL Anda

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$nama_orang_tua = $_POST['nama_orang_tua'];
$no_hp = $_POST['no_hp'];

// Masukkan data ke tabel siswa
$sql = "INSERT INTO siswa (nama_lengkap, tanggal_lahir, alamat, nama_orang_tua, no_hp) 
        VALUES ('$nama_lengkap', '$tanggal_lahir', '$alamat', '$nama_orang_tua', '$no_hp')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil! <a href='form_pendaftaran.php'>Kembali ke formulir</a>";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$conn->close();
?>