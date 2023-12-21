<?php
require_once('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO kontak (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($query) === TRUE) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database setelah proses pengiriman pesan selesai
$conn->close();
?>
