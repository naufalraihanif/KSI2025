<?php
require 'koneksi.php';
$query_sql = "SELECT nim, nama, jurusan, semester FROM mahasiswa";
$hasil = mysqli_query($koneksi, $query_sql);

$mahasiswa = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

mysqli_close($koneksi);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - KSI2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { padding-top: 40px; }
    </style>
</head>
<body>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h1 class="h4 mb-0">Data Mahasiswa (dari Database)</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($mahasiswa)): ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Data tidak ditemukan.</td>
                                </tr>
                            <?php else: ?>
                                <?php $nomor = 1; ?>
                                <?php foreach ($mahasiswa as $mhs): ?>
                                    <tr>
                                        <th scope="row"><?php echo $nomor++; ?></th>
                                        <td><?php echo htmlspecialchars($mhs['nim']); ?></td>
                                        <td><?php echo htmlspecialchars($mhs['nama']); ?></td>
                                        <td><?php echo htmlspecialchars($mhs['jurusan']); ?></td>
                                        <td><?php echo htmlspecialchars($mhs['semester']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted text-center">
                Proyek Sederhana PHP Native + Bootstrap
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>