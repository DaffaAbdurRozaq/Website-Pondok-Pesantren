<?php
include "koneksi.php";

// Variable to store result message
$resultMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $jam_pelajaran = mysqli_real_escape_string($koneksi, $_POST['jam_pelajaran']);
    $ruang_kelas = mysqli_real_escape_string($koneksi, $_POST['ruang_kelas']);
    $mata_pelajaran_id_mapel = mysqli_real_escape_string($koneksi, $_POST['mata_pelajaran_id_mapel']);

    // Query untuk menambahkan data sesi pelajaran

    $result = mysqli_query($koneksi, "INSERT INTO tambah_sesi (tanggal, jam_pelajaran, ruang_kelas, mata_pelajaran_id_mapel) VALUES ('$tanggal', '$jam_pelajaran', '$ruang_kelas', '$mata_pelajaran_id_mapel')");

    if ($result) {
        $resultMessage = "Data sesi pelajaran berhasil ditambahkan!";
    } else {
        $resultMessage = "Gagal menambahkan data sesi pelajaran!";
    }
}

// Display the result message
if ($resultMessage !== "") {
    echo '<div class="alert alert-' . ($result ? 'success' : 'danger') . '" role="alert">' . $resultMessage . '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Sesi Pelajaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Sesi Pelajaran</h2>

        <form action="tambah_sesi.php" method="POST">
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jam_pelajaran">Jam Pelajaran:</label>
                <input type="time" class="form-control" id="jam_pelajaran" name="jam_pelajaran" required>
            </div>
            <div class="form-group">
                <label for="ruang_kelas">Ruang Kelas:</label>
                <input type="text" class="form-control" id="ruang_kelas" name="ruang_kelas" required>
            </div>
            <div class="form-group">
                <label for="mata_pelajaran_id_mapel">ID Mapel:</label>
                <input type="text" class="form-control" id="mata_pelajaran_id_mapel" name="mata_pelajaran_id_mapel" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
