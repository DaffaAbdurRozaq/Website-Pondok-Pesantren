<?php
include "koneksi.php";

// Periksa apakah nis diatur dan merupakan string yang tidak kosong
if (isset($_GET['nis']) && is_string($_GET['nis']) && !empty($_GET['nis'])) {
    $nis = mysqli_real_escape_string($koneksi, $_GET['nis']);

    // Ambil data santri dari database berdasarkan nis
    $query = "SELECT * FROM santri WHERE nis = '$nis'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Pastikan data ditemukan
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);

            // Form edit data
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Edit Data Santri</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </head>
            <body>

            <div class="container mt-5">
                <h2>Edit Data Santri</h2>
                <form action="proses_edit.php" method="POST">
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $data['nis']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Santri:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama_santri']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?php echo $data['alamat']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>

            </body>
            </html>
            <?php
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter tidak valid.";
}
?>

