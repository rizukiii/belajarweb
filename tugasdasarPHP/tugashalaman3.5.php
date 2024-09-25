<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS HALAMAN 3.5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php 
    $kelereng = 37;

    if($kelereng <= 50): ?>
     <div class="alert alert-dark" role="alert">
  kelereng anda banyak
  <?php elseif($kelereng <= 40): ?>
    <div class="alert alert-secondary" role="alert">
  kelereng anda lumayan 
</div>
<?php else: ?>
    <div class="alert alert-info" role="alert">
  kelereng anda sedikit
</div>
<?php endif ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>