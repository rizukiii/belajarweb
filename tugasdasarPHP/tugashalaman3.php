<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS HALAMAN 3 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php 
        $buah = 15;
        if($buah >= 20): ?>
        <div class="alert alert-dark" role="alert">
  buah anda banyak
</div>
<?php elseif($buah <= 15): ?>
    <div class="alert alert-secondary" role="alert">
  buah anda lumayan 
</div>
<?php elseif($buah >= 10): ?>
    <div class="alert alert-info" role="alert">
  buah anda sedikit
</div>
<?php else: ?>
    <?php endif ?>
    </div>
</body>
</html>