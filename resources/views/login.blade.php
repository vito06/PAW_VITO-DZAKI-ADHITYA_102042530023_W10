<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h4 class="mb-0 fw-bold">TELYU</h4>
                        <small>Sistem Informasi Akademik</small>
                    </div>
                    <div class="card-body p-4">

                        @if(session('error'))
                            <div class="alert alert-danger py-2 text-center small">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat Email</label>
                                <input type="email" name="email" class="form-control" placeholder="nama@telkom.ac.id" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>

                            <button type="submit" class="btn btn-danger w-100 fw-semibold mt-2">Masuk</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>