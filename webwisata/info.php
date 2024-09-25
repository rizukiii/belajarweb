<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Detail</title>
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
        rel="stylesheet" />
</head>
<?php
include('config.php');
$id = $_GET['id'];
$getData = mysqli_query($connect, "SELECT * FROM `list` WHERE id='$id'");
$row = $getData->fetch_object();
?>

<body  style="background-image: url(https://i.pinimg.com/originals/96/1e/7b/961e7b5ab22f51655970cc4e7bf2bd07.jpg); object-fit: cover;">
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between mt-2">
                <div class="">
                    <h4 class="">Informasi Detail</h4>
                </div>
                <div><a href="home.php" class="btn btn-primary">kembali</a></div>
            </div>
            <div class="card-body">
                <div class="text-center my-5"><img src="galeriwisata/<?php echo $row->foto_baru ?>" alt="foto" class="img-fluid text" style="width: 100px;"></div>
                <div>Nama: <?php echo $row->nama ?></div>
                <div>Alamat: <?php echo $row->alamat ?></div>
                <div>Harga Tiket: <?php echo $row->hargatiket ?></div>
                <div>Buka: <?php echo $row->open ?></div>
                <div>Tutup: <?php echo $row->closed ?></div>
            </div>
        </div>
    </div>
</body>

</html>