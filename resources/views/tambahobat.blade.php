<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
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

        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-light">
        <div class="container-fluid d-flex justify-content-between">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Admin Panel</a>

            <!-- Menu Links -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('admin.home')}}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="{{route ('daftardokter')}}">Dokter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{route ('daftarpasien')}}">Pasien</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{route ('daftarpoli')}}">Poli</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{route ('daftarobat')}}">Obat</a>
                </li>
            </ul>

            <!-- Logout Button -->
            <form action="{{route ('admin.logout')}}" method="POST" class="d-flex">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>
<div class="container">
        <h2>Tambah Obat Baru</h2>
        
        <form action="{{route ('obattambah')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}" required>
                @error('nama_obat')
                    <div class="text-danger">{{ $message }}</div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="spesialis" class="form-label">Kemasan</label>
                <input type="text" class="form-control" id="kemasan" name="kemasan" value="{{ old('kemasan') }}" required>
                @error('kemasan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="spesialis" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('daftarobat') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
