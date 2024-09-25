<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body  style="background-image: url(https://static.vecteezy.com/system/resources/previews/014/960/352/large_2x/red-background-red-yellow-wallpaper-hd-stocks-images-download-free-free-photo.jpg); object-fit: cover;">
    
    <div class="container my-5">
        <?php
        include('config.php');
        $id = $_GET['id'];
        $getData = mysqli_query($connect, "SELECT * FROM list WHERE id='$id'");
        $row = $getData->fetch_object();
        ?>
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
                        <a href="home.php"><button type="submit" class="btn btn-danger">< Beranda</button></a>
                        <h2>Edit Data</h2>
                    </div>
                </div>
            </div>
            <!-- Menu Tab End -->
            <div class="foto my-3 mx-auto">
                <img src="galerifoto/<?php echo $row->fotoBerita ?>" alt="fotoBerita" class="img-fluid" style="witdh: 200px; height: 200px;">
            </div>
            <div class="card-body">
                <form action="editdata.php"
                    method="post"
                    class="" enctype="multipart/form-data">
                    <input type="text"
                        name="judulBerita"
                        placeholder="Ubah Judul Berita"
                        class="form-control mb-3"
                        required
                        value="<?php echo $row->judulBerita ?>">

                    <input type="file"
                        name="fotoBerita"
                        class="form-control mb-3">

                    <textarea name="isiBerita"
                        placeholder="Ubah Isi Berita" style="width: 100%;" class="form-control"
                        rows="3"><?php echo $row->isiBerita ?></textarea>

                    <button type="submit"
                        class="btn btn-danger mt-3 text-center"> Update</button>

                    <input type="hidden"
                        name="id"
                        value="<?php echo $row->id ?>">
                </form>
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