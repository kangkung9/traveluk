<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "travelkuy");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data (pastikan untuk melakukan validasi data yang diterima)
$username = $_POST['username'];
$noTelp = $_POST['noTelp'];
$date = $_POST['date'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Prepare and bind the INSERT statement
$stmt = $conn->prepare("INSERT INTO userss (username, noTelp, date, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $username, $noTelp, $date, $email, $password);

// Execute the prepared statement
if ($stmt->execute()) {
    $stmt->close();
    header("Location: ../Register.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
