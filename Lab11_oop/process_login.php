<?php
// Ini hanya contoh. Anda perlu menyimpan informasi login dengan cara yang lebih aman.
$valid_username = 'user123';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // Login berhasil
        echo "<p>Login berhasil! Selamat datang, $entered_username.</p>";
    } else {
        // Login gagal
        echo "<p>Login gagal! Silakan cek kembali username dan password Anda.</p>";
    }
}
?>
