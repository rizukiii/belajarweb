<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url(https://static.vecteezy.com/system/resources/previews/014/960/352/large_2x/red-background-red-yellow-wallpaper-hd-stocks-images-download-free-free-photo.jpg); object-fit: cover;">

    <div class="container my-5">
        <div class="card border-0 shadow">
            <!-- Nav Section Start -->
            <div class="card-header bg-warning border-0 mb-5">
                <nav class="navbar">
                    <a class="navbar-brand" href="#">
                        <div class="text-light">RizkiiWeb<span class="text-danger">.Com</span></div>
                    </a>
                </nav>
            </div>
            <!-- Nav Section End -->
            <!-- Header Data Start-->
            <div class="container mb-3">
                <div class="card mx-5 bg-danger border-0">
                    <div class="card-body text-light">
                        <div>Data Siswa</div>
                    </div>
                </div>
            </div>
            <!-- Header Data End -->
            <!-- Menu Tab Start -->
            <div class="container mb-3">
                <div class="card mx-5 border-0 shadow-sm">
                    <div class="card-body">
                        <a href="home.php"><button type="submit" class="btn btn-primary">Beranda ></button></a>
                    </div>
                </div>
            </div>
            <!-- Menu Tab End -->
            <!-- Form Section Start -->
            <div class="container mb-5">
                <div class="card border-0 shadow mx-5">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class=" mb-3">
                                <label for="" class="form-label">Judul Berita</label>
                                <input type="text" 
                                class="form-control" 
                                name="judulBerita" 
                                placeholder="Masukan Judul Berita" 
                                required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="">Foto Berita</label>
                                <input type="file" 
                                name="fotoBerita" 
                                required class="form-control" >
                            </div>
                            <div class=" mb-3">
                                <label for="" class="form-label">Isi Berita</label>
                                <textarea class="form-control" 
                                rows="3" 
                                name="isiBerita" 
                                placeholder="Masukan Isi Berita" 
                                required></textarea>
                            </div>

                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Kirim" class="btn btn-warning ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- From Section End -->
            <!-- Footer Form Start -->
            <div class="card-footer bg-warning border-0">
                <div class="text-light ms-5">2024 - http://localhost/belajarweb/tugas2 All right reserved</div>

            </div>
            <!-- Footer Form End -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>