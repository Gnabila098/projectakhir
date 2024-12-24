<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru - Bimba Smartkidz</title>
</head>
<body>
    <h2>Pendaftaran Siswa Baru - Bimba Smartkidz</h2>
    <form action="proses_pendaftaran.php" method="POST">
        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

        <label for="nama_orang_tua">Nama Orang Tua:</label><br>
        <input type="text" id="nama_orang_tua" name="nama_orang_tua" required><br><br>

        <label for="no_hp">Nomor HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>