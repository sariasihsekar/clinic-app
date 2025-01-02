<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
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

    <!-- Main Content -->
    <div class="container">
        <h2>Daftar Pasien</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Button Tambah Dokter -->
        <a href="{{route ('tambahpasien')}}" class="btn btn-success btn-sm mb-3">Tambah Pasien Baru</a>

        <!-- Tabel Dokter -->
        <table class="table table-bordered">
            <thead class="table-teal text-white">
                <tr style="background-color: #20c997;">
                    <th>ID</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No KTP</th>
                    <th>No. Telepon</th>
                    <th>No Rekam Medis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasien as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_ktp }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->no_rm }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{route ('editpasien', $item->id)}}" class="btn btn-success btn-sm">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{route ('pasien.destroy', [ 'id' => $item->id])}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
