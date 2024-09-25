<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-image: url(https://images4.alphacoders.com/225/thumb-1920-225544.jpg) ; object-fit: cover;">
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-md">
            <a class="navbar-brand text-light" href="#">Input Data Siswa</a>
        </div>
    </nav>
    <div class="container d-flex">
        <h3 class="my-3 text-light">Siswa</h3>
    </div>
    <div class="container">
        <div class="card border-0">
            <div class="card-body text-center">
                <a href="home.php"><button type="submit" class="btn btn-danger">Beranda ></button></a>
            </div>
        </div>
    </div>
    <!-- Navbar Section End -->
    <!-- Card Section Start -->
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-dark">Memasukan Data Siswa</h5>
                <p class="card-text text-dark">Mohon isi kolom dibawah ini:</p>
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <input type="text"
                        name="nama"
                        class="form-control mb-4"
                        placeholder="Nama Siswa"
                        required>
                    <input type="number"
                        name="kelas"
                        class="form-control mb-4"
                        placeholder="Pilih Kelas Anda"
                        required>
                    <input type="file"
                        name="foto"
                        class="form-control">
                    <button type="submit"
                        class="btn btn-danger mt-4">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Card Section End -->
    <!-- Second Navbar Start -->

    <!-- Second Navbar End -->
    <!-- Table Section Start -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>