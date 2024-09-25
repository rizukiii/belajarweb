<?php
include('config.php');
$id = $_GET['id'];
$getData = mysqli_query($connect, "SELECT * FROM `list` WHERE id='$id'");
$row = $getData->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet" />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
        rel="stylesheet" />
</head>

<body  style="background-image: url(https://i.pinimg.com/originals/96/1e/7b/961e7b5ab22f51655970cc4e7bf2bd07.jpg); object-fit: cover;">
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between mt-2">
                <div>
                    <h4 class="">Ubah Data</h4>
                </div>
                <div><a href="home.php" class="btn btn-primary">kembali</a></div>
            </div>
            <div class="konten">
                <div class="foto text-center my-5">
                    <img src="galeriwisata/<?php echo $row->foto ?>" alt="foto" class="img-fluid" style="witdh: 200px;">
                </div>
                <div class="card-body">
                    <form action="editdata.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="foto" class="form-control my-3"
                            required>
                        <input type="text" name="nama" placeholder="Ubah Nama Wisata" value="<?php echo $row->nama ?>" class="form-control">
                        <input type="text" name="alamat" placeholder="Ubah Alamat Alamat" value="<?php echo $row->alamat ?>" class="form-control my-3">
                        <input type="number" name="hargatiket" placeholder=" Ubah Harga Tiket" value="<?php echo $row->hargatiket ?>" class="form-control">
                        <input type="number" name="open" placeholder="Ubah Waktu Buka" value="<?php echo $row->open ?>" class="form-control my-3">
                        <input type="number" name="closed" placeholder="Ubah Waktu Tutup" value="<?php echo $row->closed ?>" class="form-control">
                        <button type="submit" class="btn btn-primary form-control my-3"><i class="fa-solid fa-check"></i></button>
                        <input type="hidden"
                            name="id"
                            value="<?php echo $row->id ?>">
                    </form>
                </div>
            </div>
        </div>
</body>

</html>