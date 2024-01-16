<?php
include "koneksi.php";

// Periksa apakah nis diatur dan merupakan string yang tidak kosong
if (isset($_GET['nis']) && is_string($_GET['nis']) && !empty($_GET['nis'])) {
    $nis = mysqli_real_escape_string($koneksi, $_GET['nis']);

    $query = "DELETE FROM santri WHERE nis = '$nis'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = 'santri.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            window.location.href = 'santri.php';
        </script>";
    }
} else {
    // Parameter nis tidak valid atau tidak ada
    echo "
    <script>
        alert('Parameter tidak valid!');
        window.location.href = 'santri.php';
    </script>";
}
?>
