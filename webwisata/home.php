<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Database</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<body  style="background-image: url(https://i.pinimg.com/originals/96/1e/7b/961e7b5ab22f51655970cc4e7bf2bd07.jpg); object-fit: cover;">
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between mt-2">
                <div><h4 class="">Home Page</h4></div>
                <div><a href="index.php" class="btn btn-primary">kembali</a></div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <?php
                        include('config.php');
                        $allData = mysqli_query($connect, "SELECT * FROM list");
                        ?>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Harga Tiket</th>
                            <th scope="col">Open At</th>
                            <th scope="col">Closed At</th>
                            <th scope="col"></th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $number = 1;
                            while ($row = $allData->fetch_object()) {
                            ?>
                                <th scope="row"><?php echo $row->number++ ?></th>
                                <td><img src="./galeriwisata/<?= $row->foto ?>" alt="foto" class="img-fluid" style="width: 200px;"></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->hargatiket ?></td>
                                <td><?php echo $row->open ?></td>
                                <td><?php echo $row->closed ?></td>
                                <td style="width: 5%"><a href="info.php?id=<?php echo $row->id ?>" class="btn btn-info">Info</a></td>

                                <td style="width: 5%"><a href="edit.php?id=<?php echo $row->id ?>" class="btn btn-warning">Edit</a></td>

                                <td style="width: 5%"><a href="delete.php?id=<?php echo $row->id ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Mengapus Data ini?')">Hapus</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>