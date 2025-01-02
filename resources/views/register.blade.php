<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .form-register {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-register .form-title {
            color: #20c997;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-register button {
            background-color: #20c997;
            border-color: #20c997;
        }

        .form-register button:hover {
            background-color: #1a9e80;
            border-color: #1a9e80;
        }

        .form-label {
            color: #495057;
            font-weight: 600;
        }
        .login-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #20c997;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: #1a9e80;
        }
    </style>
</head>
<body>
    <div class="form-register">
        <h2 class="form-title">Register</h2>

        <!-- Flash Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea id="address" name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor HP</label>
                <input type="text" id="phone" name="no_hp" class="form-control" placeholder="Masukkan nomor HP" required>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">Nomor KTP</label>
                <input type="text" id="ktp" name="no_ktp" class="form-control" placeholder="Masukkan nomor KTP" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
          <!-- Login Link -->
          <div class="login-link">
            Sudah punya akun? <a href="">Login disini!</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
