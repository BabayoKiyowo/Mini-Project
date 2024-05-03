<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
  <div class="container text-center my-5" style="background-color: #f0f0f0;">
    <h1 class="text-primary mb-4 display-3 fw-bold">Selamat Datang</h1>
    <div class="card bg-light text-dark shadow-lg">
        <div class="card-body">
            <p class="lead mb-4"><strong>Informasi Mahasiswa:</strong></p>
            <ul class="list-unstyled">
                <li><strong>Nama:</strong> Fadli Maulana Akbar </li>
                <li><strong>Kelas:</strong> SI 05-03</li>
                <li><strong>NIM:</strong> 1204220095</li>
                <li><strong>Prodi:</strong> Sistem Informasi</li>
                <li><strong>Kampus:</strong> University Telkom Surabaya</li>
            </ul>
        </div>
    </div>
    <img src="resources/images/Screenshot 2024-05-03 160702.png" alt="Gambar Mahasiswa" class="img-fluid mt-4" style="max-width: 400px;">
    <a class="btn btn-outline-primary mt-4" href="{{ route('home') }}">Kembali ke Beranda</a>
</div>

    @vite('resources/js/app.js')
</body>
</html>