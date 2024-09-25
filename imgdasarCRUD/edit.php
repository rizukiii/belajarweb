<?php
include('config.php');
$id = $_GET['id'];

$getGaleri = mysqli_query($connect, "SELECT * FROM list WHERE id='$id'");

$row = $getGaleri->fetch_object();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Edit <span class="text-danger">Galeri</span></h1>
        <div class="konten">
            <div class="foto">
                <img src="foto_galeri/<?php echo $row->foto ?>" alt="" class="img-fluid" style="height: 200px;">
            </div>
            <div class="input my-3">
                <form action="editgaleri.php" method="post" enctype="multipart/form-data">
                    <input type="file"
                     name="foto" 
                      class="form-control my-3"
                      required>
                    <button type="submit" class="btn btn-danger form-control">Kirim</button>
                    <input type="hidden" 
                    name="id" 
                    value="<?php echo $row->id ?>">
                </form>
            </div>
        </div>
    </div>

</body>

</html>