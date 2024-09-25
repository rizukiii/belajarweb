<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Galeri</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center text-danger my-5">Galeri</h1>
        <div class="card">
            <div class="card-body">
                <!-- post untuk mengirim data ke mysql -->
                 <!-- wajib menambahkan enctype="multipart/form-data" untuk bisa mengirim file -->
                <form action="insert.php" method="post" enctype="multipart/form-data" class="d-flex">
                    <!-- type nya menggunakan file -->
                    <input type="file" name="foto" id="" class="form-control" required>
                    <button type="submit" class="btn btn-danger ms-3"><i class="fa-regular fa-square-plus"></i></button>
                </form>
            </div>
        </div>
        <div class="row mt-2">
            <!-- PHP Language -->
            <?php
            // buat meyambungkannya
            include('config.php');
            // sql untuk penamaan aja dan lanjut connectin 
            $sql = mysqli_query($connect, "SELECT * FROM list");
            // penggunaan whlie untuk pengulangan data yang dapat dimasukan
            while ($row = $sql->fetch_object()) { ?>

                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="card my-3" style="width: 18rem;">
                        <div class="card-body">
                            <!-- pemanggilan img nyaa -->
                            <img src="foto_galeri/<?php echo $row->foto ?>" alt="" class="img-thumbnail" style="height: 200px; object-fit: cover; width:330px">
                        </div>
                        <div class="card-footer text-center">
                            <a href="info.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-info btn btn-info text-light"></i></a>
                            <a href="edit.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-pencil btn btn-warning text-white"></i></a>
                            <a href="delete.php?id=<?php echo $row->id ?>" 
                            class="btn btn-danger" 
                            onclick="return confirm('apakah anda yakin')"
                            ><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </div>
                </div>
            <?php }  ?>
        </div>

    </div>
</body>

</html>