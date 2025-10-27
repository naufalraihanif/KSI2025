<?php
/*
 * ==========================================================
 * DATA MAHASISWA (Contoh Sederhana)
 * ==========================================================
 *
 * Dalam aplikasi nyata, data ini biasanya diambil dari database
 * (misalnya MySQL) menggunakan query SELECT.
 *
 * $koneksi = mysqli_connect("localhost", "root", "", "db_kampus");
 * $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
 * $mahasiswa = mysqli_fetch_all($query, MYSQLI_ASSOC);
 *
 */

// Untuk contoh ini, kita gunakan data array PHP sederhana (data dummy)
$mahasiswa = [
    [
        "nim" => "2310511001",
        "nama" => "Andi Saputra",
        "jurusan" => "Teknik Informatika",
        "semester" => 3
    ],
    [
        "nim" => "2310511002",
        "nama" => "Budi Gunawan",
        "jurusan" => "Sistem Informasi",
        "semester" => 3
    ],
    [
        "nim" => "2210412005",
        "nama" => "Citra Lestari",
        "jurusan" => "Manajemen Bisnis",
        "semester" => 5
    ],
    [
        "nim" => "2310511004",
        "nama" => "Dewi Anggraini",
        "jurusan" => "Teknik Informatika",
        "semester" => 3
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - KSI2025</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Sedikit style tambahan */
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding-top: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h1 class="h4 mb-0">Data Mahasiswa (KSI2025)</h1>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>