<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History Page</title>
    <!-- Tambahkan link ke file Bootstrap CSS jika diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Riwayat Akun</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Date</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $conn = new mysqli("localhost", "root", "", "travelkuy");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Ambil data pengguna dari tabel users
            $sql = "SELECT * FROM userss";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>";
                    echo "<a href=http://localhost/TravelKuy1/TravelKuy/mail/edit.php?id=" . $row["id"] . "' class='btn btn-info'>Edit</a>";
                    echo "<a href=http://localhost/TravelKuy1/TravelKuy/mail/delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data pengguna.</td></tr>";
            }

            // Tutup koneksi ke database
            $conn->close();
            ?>
        </tbody>
    </table>
    <!-- Tambahkan link ke file Bootstrap JS jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
