<?php
include "koneksi.php"; // Pastikan ini mengarah ke file koneksi yang benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    // Query untuk mengecek apakah username sudah digunakan
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Username sudah digunakan, silakan pilih username lain.";
    } else {
        // Query untuk menambahkan user baru
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $insert_result = mysqli_query($koneksi, $insert_query);

        if ($insert_result) {
            echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h2>Registrasi</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
