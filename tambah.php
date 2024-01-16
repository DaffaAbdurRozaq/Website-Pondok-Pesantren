<?php
include "koneksi.php";

// Fungsi untuk memasukkan data santri ke database
function tambahSantri($nis, $nama, $tanggal_lahir, $alamat)
{
    global $koneksi;

    // Escape string untuk menghindari SQL injection
    $nis = mysqli_real_escape_string($koneksi, $nis);
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $tanggal_lahir);
    $alamat = mysqli_real_escape_string($koneksi, $alamat);

    // Query untuk menambahkan data santri
    $query = "INSERT INTO santri (nis, nama_santri, tanggal_lahir, alamat) VALUES ('$nis', '$nama', '$tanggal_lahir', '$alamat')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    return $result;
}

// Tangkap data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST["nis"];
    $nama = $_POST["nama_santri"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];

    // Panggil fungsi tambahSantri
    if (tambahSantri($nis, $nama, $tanggal_lahir, $alamat)) {
        echo "
        <script>
            alert('Data santri berhasil ditambahkan!');
            window.location.href = 'santri.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data santri gagal ditambahkan!');
            window.location.href = 'santri.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Santri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Santri</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>
            <div class="form-group">
                <label for="nama_santri">Nama Santri:</label>
                <input type="text" class="form-control" id="nama_santri" name="nama_santri" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
