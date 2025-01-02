<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-icon {
            font-size: 3rem;
            color: #20c997;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
            <!-- Navbar toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('admin.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route ('daftardokter')}}">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('daftarpasien')}}">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('daftarpoli')}}">Poli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('daftarobat')}}">Obat</a>
                    </li>
                </ul>
                <!-- Logout Button -->
                <form action="{{route ('admin.logout')}}" method="POST" class="d-flex">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        <div class="row">
            <!-- Dokter Card -->
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="bi bi-person-badge card-icon"></i>
                        <h5 class="card-title mt-3">Dokter</h5>
                        <p class="card-text">Kelola data dokter</p>
                        <a href="{{route ('daftardokter')}}" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <!-- Pasien Card -->
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="bi bi-person-lines-fill card-icon"></i>
                        <h5 class="card-title mt-3">Pasien</h5>
                        <p class="card-text">Kelola data pasien</p>
                        <a href="{{route ('daftarpasien')}}" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <!-- Poli Card -->
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="bi bi-building card-icon"></i>
                        <h5 class="card-title mt-3">Poli</h5>
                        <p class="card-text">Kelola data poli</p>
                        <a href="{{route ('daftarpoli')}}" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <!-- Obat Card -->
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="bi bi-capsule-pill card-icon"></i>
                        <h5 class="card-title mt-3">Obat</h5>
                        <p class="card-text">Kelola data obat</p>
                        <a href="{{route ('daftarobat')}}" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
