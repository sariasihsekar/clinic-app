<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dokter</title>
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
            <a class="navbar-brand" href="#">Dashboard Dokter</a>

            <!-- Menu Links -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dokterhome') }}">Dashboard</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Perbaharui Data Dokter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Input Jadwal Periksa</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Memeriksa Pasien</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Hitung Biaya Periksa</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Catatan Obat</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="">Riwayat Pasien</a>
                </li>
            </ul>

            <!-- Logout Button -->
            <form action="{{ route('dokter.logout') }}" method="POST" class="d-flex">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
    <h2>Selamat Datang, Dokter!</h2>
    <p>Ini adalah dashboard dokter, Anda dapat mengakses berbagai menu di atas.</p>

    <div class="row">
        <!-- Card untuk memperbaharui data dokter -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Perbaharui Data Dokter</h5>
                    <a href="" class="btn btn-success">Perbaharui Data</a>
                </div>
            </div>
        </div>

        <!-- Card untuk input jadwal periksa -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Input Jadwal Periksa</h5>
                    <a href="" class="btn btn-success">Input Jadwal</a>
                </div>
            </div>
        </div>

        <!-- Card untuk memeriksa pasien -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Memeriksa Pasien</h5>
                    <a href="" class="btn btn-success">Memeriksa Pasien</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Card untuk menghitung biaya periksa -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Hitung Biaya Periksa</h5>
                    <a href="" class="btn btn-success">Hitung Biaya</a>
                </div>
            </div>
        </div>

        <!-- Card untuk memberi catatan obat -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Catatan Obat</h5>
                    <a href="" class="btn btn-success">Catatan Obat</a>
                </div>
            </div>
        </div>

        <!-- Card untuk riwayat pasien -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Riwayat Pasien</h5>
                    <a href="" class="btn btn-success">Riwayat Pasien</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
