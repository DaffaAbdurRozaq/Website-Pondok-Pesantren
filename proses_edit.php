<!-- proses_edit.php -->

<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    $query = "UPDATE santri SET nama_santri='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE nis='$nis'";

    if (mysqli_query($koneksi, $query)) {
        echo "
            <script>
                alert('Data berhasil diupdate!');
                window.location.href='santri.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diupdate!');
                window.location.href='santri.php';
            </script>
        ";
    }
} else {
    echo "Akses tidak valid!";
}
?>
