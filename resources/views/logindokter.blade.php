<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pasien</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .form-login {
            max-width: 400px;
            margin: 50px auto;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-login .form-title {
            color: #20c997;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-login button {
            background-color: #20c997;
            border-color: #20c997;
        }

        .form-login button:hover {
            background-color: #1a9e80;
            border-color: #1a9e80;
        }

        .form-label {
            color: #495057;
            font-weight: 600;
        }
        .register-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #20c997;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
            color: #1a9e80;
        }
    </style>
</head>
<body>
    <div class="form-login">
        <h2 class="form-title">Login Dokter</h2>

        <!-- Flash Message -->
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{route('login2')}}" method="POST">
            @csrf
            <input type="hidden" name="user_type" value="dokter">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">Password</label>
                <input type="text" id="ktp" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
