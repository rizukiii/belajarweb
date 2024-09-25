<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todolist</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .btn-outline-warning:hover {
      color: white;
    }
      .btn-outline-info:hover {
        color: white;
      }
   
  </style>


</head>

<body>
  <div class="container">
    <!-- header, modifikasi header bisa menggunakan span didalamnya-->
    <h1 class=" my-5 text-center">Todo <span class="text-primary">List</span></h1>
    <!-- card border adalah garis luar, dibuat dark agar terlihat, dan ditambahkan shadow -->
    <div class="card border border-dark shadow-lg">
      <div class="card-body">
        <!-- action mengarahkan pada halaman insert, class d-flex untuk membuat item" sejajar di layar  dengan method post-->
        <form action="insert.php" class="d-flex" method="post">
          <!-- type text untuk memasukan text, class untuk tampilan form, name untuk data pada mysql, placeholder untuk teks bayangan di dalam kolom input, required untuk agar tidak bisa kosongan isi input an nya -->
          <input type="text" class="form-control " name="data" placeholder="Masukan Nama Anda" required>
          <!--  -->
          <button type="submit" class="btn btn-outline-primary ms-3">Kirim</button>
        </form>
      </div>
    </div>
    <!-- end card -->

    <!-- php language -->
    <?php
    include('config.php');
    $alldata = mysqli_query($connect, "SELECT * FROM list")
    ?>
    <!-- ini adalah table penampilan database -->
    <table class="table mt-3">
      <!-- thead adalah bagian atas berisi info kolom -->
      <thead>
        <tr>
          <!-- isi kolom -->
          <th scope="col">Nomor</th>
          <th scope="col">Data</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <!-- tbody adalah bagian bawah alias baris dimana data masuk -->
      <tbody>
        <?php
        // ini adalah variabel nilai yang akan dimulai dari mana data tersebut 
        $number = 1;
        // ini adalah pengulangan sekaligus menampilkan seluruh data yang masuk ke database setelah di input oleh user
        while ($row = $alldata->fetch_object()) {
        ?>


          <tr>
            <!-- ini buat menggunakan increment perintahnya -->
            <th scope="row"><?php echo $number++ ?></th>

            <!-- ini untuk memanggil data di database -->
            <td><?php echo $row->data ?></td>

            <td style="width:5%;" class="text-center"><a href="info.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-info btn btn-outline-info"></i></a></td>

            <td style="width: 5%;"><a href="edit.php?id=<?php echo $row->id ?>" class="btn btn-outline-warning "><i class="fa-solid fa-pen"></i></a></td>
            
            <!-- ini untuk membuat ikon buang dan membuat pop up seelum menghapus -->
            <td style="width:5%"><a href="delete.php?id=<?php echo $row->id ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yain Ingin Mengapus DAta ini?')"><i class="fa-solid fa-trash"></i></a></td>
          </tr>
        <?php

        } ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>