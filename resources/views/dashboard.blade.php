<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Portal Akademik</title>
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

    <!-- Konten Utama -->
    <div class="container my-4">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-4">
                <h4 class="fw-bold mb-1">Selamat Datang, {{ Auth::user()->name }}</h4>
                <p class="text-muted mb-0">
                    Silakan pilih portal peran atau layanan akademik pada menu di bawah ini.
                </p>
            </div>
        </div>

        <h5 class="fw-bold mb-3 text-secondary">Portal Pengguna</h5>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Halaman Admin</h5>
                        <p class="card-text text-muted small">
                            Manajemen pengguna, pengaturan peran, dan administrasi sistem akademik.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/admin" class="btn btn-outline-danger btn-sm w-100">Masuk Halaman Admin</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Halaman Dosen</h5>
                        <p class="card-text text-muted small">
                            Ruang kerja dosen untuk jadwal perkuliahan dan aktivitas pengajaran.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/dosen" class="btn btn-outline-danger btn-sm w-100">Masuk Halaman Dosen</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Halaman Mahasiswa</h5>
                        <p class="card-text text-muted small">
                            Ruang informasi perkuliahan, jadwal kelas, dan layanan kemahasiswaan.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/mahasiswa" class="btn btn-outline-danger btn-sm w-100">Masuk Halaman Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="fw-bold mb-3 text-secondary">Layanan Materi & Nilai</h5>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Kelola Materi</h6>
                        <p class="card-text text-muted small">Unggah dan perbarui modul perkuliahan.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/kelola-materi" class="btn btn-danger btn-sm w-100">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Lihat Materi</h6>
                        <p class="card-text text-muted small">Akses bahan ajar mata kuliah aktif.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/lihat-materi" class="btn btn-danger btn-sm w-100">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Kelola Nilai</h6>
                        <p class="card-text text-muted small">Input dan rekapitulasi nilai mahasiswa.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/kelola-nilai" class="btn btn-danger btn-sm w-100">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Lihat Nilai</h6>
                        <p class="card-text text-muted small">Informasi kartu hasil studi pribadi.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="/lihat-nilai" class="btn btn-danger btn-sm w-100">Buka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>