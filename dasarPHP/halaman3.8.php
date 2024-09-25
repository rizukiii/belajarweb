<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN 3.8 HTML & PHP : IF STATEMENT / Pengecekan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- CODINGAN DIMULAI BACA DARI PALING ATAS -->
    <div class="container">
        <?php

        $nilai = 70;
        $absenMasuk = 50;
        // $RESULT MENYIMPAN TAMBAH ANTARA $NILAI DAN $ABSEN MASUK
        $result = $nilai + $absenMasuk;

        // JIKA $RESULT SAMA DENGAN GABOLEH KURANG ATAU LEBIH MAKA DIA AKAN MENAMPILKAN "SELAMAT ANDA LULUS"
        if ($result == 150): ?>
            <div class="alert alert-success" role="alert">
                Selamat Anda Lulus
            </div>
            <!-- JIKA $RESULT LEBIH BESAR SAMA DENGAN DARI 100 MAKA AKAN MENAMPILKAN "Nilai Anda RATA RAta" -->
        <?php elseif ($result >= 100): ?>
            <div class="alert alert-warning" role="alert">
                Nilai Anda Rata Rata
            </div>
            <!-- JIKA $RESULT LEBIH BESAR DARI 50 TAPI GA LEBIH BESAR DARI 100 DIA BAKAL MENAMPILKAN "NILAI ANDA KURANG BAGUS" -->
        <?php elseif ($result >= 50): ?>
            <div class="alert alert-warning" role="alert">
                Nilai Anda Kurang Bagus
            </div>
            <!-- JIKA TIDAK KEDUANYA ATAU KETIGANYA DIA BAKAL MENAMPILKAN "ANDA HARUS BELAJAR LEBIH GIAT" -->
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Anda Harus Belajar Lebih Giat!!!
            </div>
        <?php endif ?>
    </div>
</body>

</html>