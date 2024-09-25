<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN 3 HTML & PHP: Percabangan/Pengecekan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        $nilai = 60;

        // jika variable nilai lebih besar dari 60 {}
        // if ($nilai > 60) { alert }
        if ($nilai >= 60):
            ?>
            <div class="alert alert-success" role="alert">
                Selamat Anda Lulus
            </div>
            <!-- JIKA TIDAK variable nilai sama dengan 10 -->
        <?php elseif ($nilai = 10): ?>
            <div class="alert alert-warning" role="alert">
                Nilai Anda Kurang Bagus
            </div>
            <!-- JIKA TIDAK KEDUANYA -->
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Anda Belum Lulus
            </div>
            <!-- PENUTUP DARI IF STATEMENT ATAU PENGECEKAN -->
        <?php endif ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>