<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN 6 belajar html dan php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- ini untuk mengirimkan data yangbelum ada atau kosong menggunakan method post -->
        <form action="./halaman6.5.php" method="post" class="my-5">
            <div class="mb-3">
                <label for="">Nama</label>
                <!-- input juga wajib dikasih penamaan -->
                <input type="text" name="nama" class="from-control" placeholder="Masukan Nama Anda">


            </div>
            <!-- ini juga wajib buat submit -->
            <button type="submit" class="btn btn-primary">kirim</button>
        </form>
    </div>
</body>
</html>