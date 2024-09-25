<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTml dan php halaman 5 method get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- ini yang wajib di isi action untuk berpindah ke halaman selanjutnya buat aksi yang ingin di post atau get -->
        <!-- post untuk mengirim dan get untuk mengambil -->
        <form action="./halaman5.5.php" method="get" class="my-5">
            <div class="mb-3">
                <label for="">Nama</label>
                <!-- yang sering eror di name ini jadi perhatikan -->
                <input type="text" name="nama" class="form-control">
            </div>
            <!-- button untuk mengirim ke halaman selanjutnya yang diperintah harus memakai submit -->
            <button type="submit" class="btn btn-primary">Kirim</button>
            <!-- ada 2 cara untuk mengirim versi tombol -->
             <input type="button" value="Kirim" class="btn btn-primary">
        </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>