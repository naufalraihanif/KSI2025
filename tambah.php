<?php
// tambah.php

$pesan = '';

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'koneksi.php'; // Hubungkan ke database

    // Ambil data dari form dan bersihkan
    $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
    $semester = (int)$_POST['semester'];

    // Buat query INSERT
    $query_sql = "INSERT INTO mahasiswa (nim, nama, jurusan, semester) 
                  VALUES ('$nim', '$nama', '$jurusan', $semester)";

    if (mysqli_query($koneksi, $query_sql)) {
        $pesan = '<div class="alert alert-success" role="alert">
                    Data mahasiswa berhasil ditambahkan!
                  </div>';
    } else {
        $pesan = '<div class="alert alert-danger" role="alert">
                    Gagal menambahkan data: ' . mysqli_error($koneksi) . '
                  </div>';
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa - KSI2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { padding-top: 40px; max-width: 600px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="h4 mb-0">Form Tambah Data Mahasiswa</h1>
            </div>
            <div class="card-body">
                
                <?php echo $pesan; ?>

                <form action="tambah.php" method="POST">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="number" class="form-control" id="semester" name="semester" min="1" max="14">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>