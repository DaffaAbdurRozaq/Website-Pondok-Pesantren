<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_handphone = mysqli_real_escape_string($koneksi, $_POST['no_handphone']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $kehadiran_id_kehadiran = mysqli_real_escape_string($koneksi, $_POST['kehadiran_id_kehadiran']);

    // Query untuk menambahkan data guru
    $query = "INSERT INTO guru (nip, nama, alamat, no_handphone, tanggal_lahir, kehadiran_id_kehadiran) VALUES ('$nip', '$nama', '$alamat', '$no_handphone', '$tanggal_lahir', '$kehadiran_id_kehadiran')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "
        <script>
            alert('Data guru berhasil ditambahkan!');
            window.location.href = 'guru.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Gagal menambahkan data guru!');
            window.location.href = 'tambah_guru.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Guru</h2>
        <form action="tambah_guru.php" method="POST">
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_handphone">No Handphone:</label>
                <input type="text" class="form-control" id="no_handphone" name="no_handphone" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="kehadiran_id_kehadiran">Kehadiran ID:</label>
                <input type="text" class="form-control" id="kehadiran_id_kehadiran" name="kehadiran_id_kehadiran" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
