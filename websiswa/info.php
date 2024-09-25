<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-image: url(https://images4.alphacoders.com/225/thumb-1920-225544.jpg) ; object-fit: cover;">
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-md">
            <a class="navbar-brand text-light" href="#">Informasi Detail</a>
        </div>
    </nav>
    <div class="container d-flex">
        <h3 class="my-3 text-light">Siswa</h3>
    </div>
    <div class="container">
        <div class="card border-0">
            <div class="card-body text-center">
                <a href="home.php"><button type="submit" class="btn btn-danger">
                        < Kembali</button></a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="row text-center">
                    <?php
                    include('config.php');
                    $id = $_GET['id'];
                    $getData = mysqli_query($connect, "SELECT * FROM list WHERE id='$id'");
                    $row = $getData->fetch_object();
                    ?>
                    <div class="col">
                        <img src="galerisekolah/<?php echo $row->foto_buatan ?>" alt="">
                    </div>
                    <div class="col">
                        <h1>Nama :<?php echo $row->nama ?></h1>
                    </div>
                    <div class="col">
                        <h1>Kelas :<?php echo $row->kelas ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>