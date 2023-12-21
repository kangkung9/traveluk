<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelKuy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: url('path/to/your/background-image.jpg') center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .header {
            background-color: #28a745;
            padding: 20px 0;
            text-align: center;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .logo {
            font-size: 2.5em;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .logo span.travel {
            color: #000;
        }

        .logo span.kuy {
            color: #7AB730;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            font-weight: bold;
            color: #000;
        }

        .form-container input {
            margin-bottom: 15px;
        }

        .form-container .btn-primary {
            background-color: #28a745;
            border: none;
            width: 100%;
            padding: 10px;
        }

        .form-container .btn-primary:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #333;
            padding: 20px 0;
            text-align: center;
            color: #fff;
            border-radius: 0 0 10px 10px;
        }

        .footer p {
            margin: 0;
        }

        /* Style for the Registrasi heading */
        .registration-heading {
            color: #000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="logo">Travel<span class="travel">Kuy</span></h1>
    </div>

    <div class="container">
        <h2 class="registration-heading">Registrasi</h2>
        <div class="form-container">
            <form id="travelForm">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">No.HP</label>
                    <input type="tel" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 TravelKuy. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        function submitForm() {
            var name = document.getElementById("exampleInputName").value;
            var email = document.getElementById("exampleInputEmail1").value;
            var phone = document.getElementById("exampleInputPhone").value;
            var password = document.getElementById("exampleInputPassword1").value;

            if (name && email && phone && password) {
                alert("Berhasil Menghubungkan!\n\nNama: " + name + "\nEmail: " + email + "\nNo. HP: " + phone);
            } else {
                alert("Harap lengkapi semua kolom!");
            }
        }
    </script>
</body>

</html>
