<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }} - Portal Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/dashboard">TELYU</a>
            <div class="d-flex align-items-center gap-3">
                <span class="text-white small">
                    {{ Auth::user()->name }}
                    <span class="badge bg-light text-danger ms-1 text-uppercase">{{ Auth::user()->role }}</span>
                </span>
                <form action="/logout" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none text-danger">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $judul }}</li>
            </ol>
        </nav>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h4 class="fw-bold mb-2">{{ $judul }}</h4>
                <p class="text-muted mb-4">{{ $deskripsi }}</p>

                <div class="alert alert-light border text-muted small mb-4">
                    Modul <strong>{{ $judul }}</strong> aktif dan siap digunakan untuk pengelolaan data akademik.
                </div>

                <a href="/dashboard" class="btn btn-secondary btn-sm">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>

</body>
</html>