<!-- FUNGSI INCLUDE UNTUK PEMANGGILAN FILE LAIN, Contoh: action.php -->
<!-- KEGUNAANNYA BIAR MEMUDAHKAN DAN EFISIEN CODE -->
<?php include('./action.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2 EXTEND FILE HTML & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card my-5" style="width: 18rem;">
                    <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                    <img src="<?= $gambar ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <h5 class="card-title"><?= $judul ?></h5>
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <p class="card-text"><?= $isi ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $pembuat ?></small></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card my-5" style="width: 18rem;">
                    <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                    <img src="<?= $gambar ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <h5 class="card-title"><?= $judul ?></h5>
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <p class="card-text"><?= $isi ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $pembuat ?></small></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card my-5" style="width: 18rem;">
                    <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                    <img src="<?= $gambar ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <h5 class="card-title"><?= $judul ?></h5>
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <p class="card-text"><?= $isi ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $pembuat ?></small></p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card my-5" style="width: 18rem;">
                    <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                    <img src="<?= $gambar ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <h5 class="card-title"><?= $judul ?></h5>
                        <!-- PEMANGGILAN PHP DIDALAM TAG HTML -->
                        <p class="card-text"><?= $isi ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $pembuat ?></small></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


</body>

</html>