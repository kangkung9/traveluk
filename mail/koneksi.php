<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda jika berbeda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "travelkuy"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil
echo "Koneksi berhasil"; // Opsional, bisa dihapus setelah yakin koneksi berhasil
?>
