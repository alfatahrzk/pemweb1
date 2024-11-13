<?php
$nama = "AL FATAH RIZKI ANANDA";
$jurusan = "S1 Sistem Informasi";
$kelas = 'I';
$angkatan = 2023;
$universitas = "Universitas Negeri Surabaya";
$bb = 63.5;
$tb = 174;
$ttl = "28 Mei 2003";
$status = true;

if ($status) {
    $status = "Ya";
} else {
    $staus = "Tidak";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ID Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(50deg, black, grey, white);
            color: white;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card mb-3" style="max-width: 590px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="foto.jpeg" class="img-fluid rounded-start" alt="foto saya">
            </div>
            <div class="col-md-8 mt-2">
                <div class="card-body ">
                    <h5 class="card-title text-center text-danger"><strong><?= $nama ?></strong></h5>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Jurusan</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $jurusan ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Angkatan</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $angkatan ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Kelas</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $kelas ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Universitas</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $universitas ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Berat Badan</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $bb ?> Kg</div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Tinggi Badan</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $tb ?> Cm</div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Tanggal Lahir</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $ttl ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-secondary"><strong>Status</strong></div>
                        <div class="col-1">:</div>
                        <div class="col-7"><?= $status ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>