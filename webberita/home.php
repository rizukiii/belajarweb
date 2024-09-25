<!-- PHP LANGUAGE -->
<?php
include('config.php');
$sql = mysqli_query($connect, "SELECT * FROM list");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    .btn-outline-info:hover {
      color: white;
    }

    .btn-outline-warning:hover {
      color: white;
    }
  </style>
</head>

<body style="background-image: url(https://static.vecteezy.com/system/resources/previews/014/960/352/large_2x/red-background-red-yellow-wallpaper-hd-stocks-images-download-free-free-photo.jpg); object-fit: cover;">
  <!-- Header -->
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
      <div class="card-body">
        <!-- Menu Tab Start -->
        <div class="container">
          <div class="card-body">
            <a href="index.php"><button type="submit" class="btn btn-danger">+ Enter Berita</button></a>
          </div>
        </div>
        <!-- Menu Tab End -->
        <!-- Table Section Start -->
        <div class="container mb-4">
          <div class="card border-0 shadow">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Foto Data</th>
                    <th scope="col">Judul Data</th>
                    <th scope="col">Isi Data</th>
                    <th scope="col"></th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $number = 1;
                  while ($row = $sql->fetch_object()) {
                  ?>
                    <tr>
                      <th scope="row"><?php echo $number++ ?></th>
                      <td><img src="galerifoto/<?php echo $row->fotoBerita ?>" 
                      class="img-thumbnail"
                     style="height: 200px; object-fit: cover; width:330px"></td>
                      <td><?php echo $row->judulBerita ?></td>
                      <td><?php echo $row->isiBerita ?></td>
                      <td style="width:5%"><a href="info.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-circle-info btn btn-outline-info"></i></a></td>
                      <td style="width:5%"><a href="edit.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-pen-to-square btn btn-outline-warning"></i></a></td>
                      <td style="width:5%"><a href="delete.php?id=<?php echo $row->id ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mneghapus data ini?')"><i class="fa-solid fa-eraser btn btn-outline-danger"></i></a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Table Section End -->
      </div>
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