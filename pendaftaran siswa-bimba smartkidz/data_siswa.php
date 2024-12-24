<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'smartkidz';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data siswa
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Bimba Smartkidz</title>
</head>
<body>
    <h2>Data Siswa yang Sudah Terdaftar</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nama Orang Tua</th>
            <th>Nomor HP</th>
            <th>Tanggal Daftar</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['nama_orang_tua']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td><?= $row['tanggal_daftar']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Belum ada data siswa.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>