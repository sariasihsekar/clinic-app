<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f0f2f5;
        }

        .navbar {
            background-color: #20c997;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #1a9e80 !important;
        }

        .btn-outline-danger {
            color: white;
            border-color: white;
        }

        .btn-outline-danger:hover {
            background-color: white;
            color: #dc3545;
        }

        .container {
            margin: 40px auto;
            background-color: white;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        h2 {
            color: #20c997;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-success {
            background-color: #20c997;
            border-color: #20c997;
        }

        .btn-success:hover {
            background-color: #1a9e80;
            border-color: #1a9e80;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light">
        <div class="container-fluid d-flex justify-content-between">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Dashboard Pasien</a>

            <!-- Menu Links -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('pasienhome') }}">Dashboard</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Daftar Poli</a>
                </li>
            </ul>

            <!-- Logout Button -->
            <form action="{{ route('pasien.logout') }}" method="POST" class="d-flex">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Selamat Datang, Pasien!</h2>
        <p>Untuk mendaftar ke poli, silahkan tekan tombol dibawah ini.</p>

        <!-- Tombol Daftar Poli -->
        <a href="" class="btn btn-success btn-sm mb-3">Daftar ke Poli</a>
    </div>
</body>

</html>
