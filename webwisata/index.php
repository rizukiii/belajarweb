<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Wisata</title>
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

<body style="background-image: url(https://i.pinimg.com/originals/96/1e/7b/961e7b5ab22f51655970cc4e7bf2bd07.jpg); object-fit: cover;">
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between mt-2">
                <div>
                    <h4 class="">Input Data Wisata</h4>
                </div>
                <div><a href="home.php" class="btn btn-primary">Beranda</a></div>
            </div>
            <div class="card-body">
                <form action="insert.php" method="post" enctype="multipart/form-data">

                    <input type="file"
                        name="foto"
                        class="form-control my-3" placeholder="Kirim Foto Wisata">

                    <input type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Masukan Nama Wisata">

                    <input type="text"
                        name="alamat"
                        class="form-control my-3"
                        placeholder="Masukan Alamat Wisata">

                    <input type="number"
                        name="hargatiket"
                        class="form-control"
                        placeholder="Masukan Harga Tiket Masuk">

                    <input type="number"
                        name="open"
                        class="form-control my-3"
                        placeholder="Buka Jam">

                    <input type="number"
                        name="closed"
                        class="form-control my-3"
                        placeholder="Tutup Jam">

                    <input type="submit"
                        value="Kirim"
                        class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>