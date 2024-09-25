<?php
// harus sama perintah php post dan getnya dari halaman seblumnya, hati"
$nama = $_POST['nama']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR HTML DAN PHP HALAMAN 6.5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <!-- untuk penamaan variabelnya -->
            Nama Saya :
                <span class="fw-bold"><?= $nama?> </span>
            </div>
        </div>
    </div>
</body>
</html>