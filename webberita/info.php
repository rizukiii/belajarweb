<?php
include('config.php');
$id = $_GET['id'];
$getData = mysqli_query($connect, "SELECT * FROM list WHERE id ='$id'");
$row = $getData->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url(https://static.vecteezy.com/system/resources/previews/014/960/352/large_2x/red-background-red-yellow-wallpaper-hd-stocks-images-download-free-free-photo.jpg); object-fit: cover;">
    <!-- Card Section Start -->
    <div class="container my-5">
        <div class="card border-0">
            <!-- Nav Section Start -->
            <div class="card-header bg-warning border-0">
                <nav class="navbar">
                    <a class="navbar-brand" href="#">
                        <div class="text-light">RizkiiWeb<span class="text-danger">.Com</span></div>
                    </a>
                </nav>
            </div>
            <!-- Nav Section End -->
            <!-- Menu Tab Start -->
            <div class="container my-3">
                <div class="card mx-5 border-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <a href="home.php"><button type="submit" class="btn btn-danger">
                                < Beranda</button></a>
                        <h2>Detail Informasi</h2>
                    </div>
                </div>
            </div>
            <!-- Menu Tab End -->
            <div class="container mb-3">
                <div class="card mx-5 border-0 shadow-sm">
                    <!-- Table Show First -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div><img src="galerifoto/<?php echo $row->fotoBerita ?>" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col align-items-center">
                                <h1 class="d-flex justify-content-center ">Judul :<?php echo $row->judulBerita ?></h1>
                                <div class="mt-3">Isi :<?php echo $row->isiBerita ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Show First -->
                </div>
            </div>
            <!-- Footer Form Start -->
            <div class="card-footer bg-warning border-0">
                <div class="text-light ms-5">2024 - http://localhost/belajarweb/tugas2 All right reserved</div>
            </div>
            <!-- Footer Form End -->
        </div>
    </div>
</body>

</html>