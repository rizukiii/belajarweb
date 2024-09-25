<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body  style="background-image: url(https://images4.alphacoders.com/225/thumb-1920-225544.jpg) ; object-fit: cover;">
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-md">
            <a class="navbar-brand text-light" href="#">Halaman Edit Data</a>
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
            <?php
            include('config.php');
            $id = $_GET['id'];
            $getData = mysqli_query($connect, "SELECT * FROM list WHERE id='$id'");
            $row = $getData->fetch_object();
            ?>
            <div class="card-body">
                <form action="editdata.php" method="post" enctype="multipart/form-data">
                    <div class="text-center"><img src="galerisekolah/<?php echo $row->foto ?>" alt="foto" class="img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                    </div>
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" id="" value="<?php echo $row->nama ?>" class="form-control"><br>
                    <label for="" class="form-label">Kelas</label>
                    <input type="number" name="kelas" id="" value="<?php echo $row->kelas ?>" class="form-control">
                    <label for="" class="form-label mt-3">Foto</label>
                    <input type="file" name="foto" id="" class="form-control">
                    <div class="mt-4 text-center">
                        <input type="submit" value="Update" class="btn btn-danger">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                </form>
            </div>
        </div>
    </div>
</body>

</html>