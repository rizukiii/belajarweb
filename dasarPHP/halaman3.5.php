<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN 3.5 HTML & PHP : IF STATEMENT / Pengecekan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        $nilai = 70;
        $absenMasuk = 85;

        if ($nilai >= 80 && $absenMasuk >= 80): ?>
            <div class="alert alert-success" role="alert">
                Selamat Anda Lulus
            </div>
        <?php elseif ($nilai >= 70 && $absenMasuk >= 70): ?>
            <div class="alert alert-warning" role="alert">
                Nilai Anda Rata Rata
            </div>
        <?php elseif ($nilai >= 60 && $absenMasuk >= 60): ?>
            <div class="alert alert-warning" role="alert">
                Nilai Anda Kurang Bagus
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Anda Harus Belajar Lebih Giat!!! 
            </div>
        <?php endif ?>
    </div>
</body>

</html>