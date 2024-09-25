<!-- membuat halaman edit  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Todo List</title>
    <!-- link framework taruh disini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <!-- Header -->
        <h1 class="text-center my-5">Edit Todo <span class="text-primary">List</span></h1>
        <!-- PHP Language -->
         <?php
        //  sambungkan halaman ini ke config
include('config.php');
// ini adalah perintah jika kita ingin update data ,ini bagian kita mengambil data saat kita ingin mnegedit agar data tidak ke ubah semuanya
$id = $_GET['id'];
$getData = mysqli_query($connect, "SELECT * FROM list WHERE id ='$id'");         
$row = $getData->fetch_object();
?>

        <!-- Card Section -->
        <div class="card shadow-lg">
            <div class="card-body">
                <!-- jangan lupa kehalaman edit data di isi -->
                 <!-- dibagian input kita tambah "value untuk menampilkan data asli sebelum diubah -->
                  <!-- name jangan lupa harus disamakan database -->
                <form action="editdata.php" class="d-flex" method="post">
                    <input type="text" name="data" id="" class="form-control" placeholder="Apa Yang Mau Anda Ubah?" value="<?php echo $row->data ?>">
                    <!-- pemanggilan value diatas ini -->
                    <button type="submit" class="btn btn-outline-primary ms-3"><i class="fa-solid fa-plus"></i></button>
                    <!-- penambahan tombol aksi diatas ini  -->
                     <!-- dibawah ini juga penting kalian harus memasukan input hidden untuk mengirim data ke tabel penampilan dan dihidden agar tidak terlihat supaya user tidak bisa mengubah nya jika diubah bisa eror -->
                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                </form>
            </div>
        </div>
    </div>
</body>

</html>