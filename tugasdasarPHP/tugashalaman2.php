<?php 
include('/Applications/XAMPP/xamppfiles/htdocs/belajarweb/tugas/tugasaction2.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS HALAMAN 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid mx-auto my-5">
<div class="card" style="width: 18rem;">
  <img src="<?= $gambar ?>" class="card-img-top" alt="JOkowi">
  <div class="card-body">
    <h5 class="card-title"><?= $judul ?></h5>
    <p class="card-text"><?= $isi ?></p>
    <a href="https://www.cnnindonesia.com/nasional/20240826060233-32-1137383/jokowi-curhat-soal-politik-begitu-mau-pergi-ditinggal-ramai-ramai" class="btn btn-primary">Detail</a>
  </div>
</div>
</div>

</body>
</html>