<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Dibatasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0 text-center p-4">
                    <div class="card-body">
                        <h1 class="display-3 fw-bold text-danger mb-1">403</h1>
                        <h5 class="fw-bold mb-2">Akses Dibatasi</h5>
                        <p class="text-muted small mb-4">
                            {{ $exception->getMessage() ?: 'Akun Anda tidak memiliki otorisasi untuk mengakses halaman ini.' }}
                        </p>
                        <a href="/dashboard" class="btn btn-danger btn-sm px-4">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>