<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS HALAMAN 3.8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php 
        $buah = 70;
        $lauk = 30;
        $nasi = 20;
        $sayur = 10;

        $hasil = $buah - $lauk - $nasi - $sayur;

        if($hasil == 10): ?>
        <div class="alert alert-success" role="alert">
                Selamat Anda Sehat
            </div>
            <?php elseif($hasil >= 8): ?>
    <div class="alert alert-info" role="alert">
     anda sehat sedikit
  </div>
  <?php else: ?>
    <?php endif ?>


    </div>
</body>
</html>