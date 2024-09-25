<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-info:hover {
            color:white
        }
        .btn-warning:hover {
            color:white
        }
    </style>
</head>

<body  style="background-image: url(https://images4.alphacoders.com/225/thumb-1920-225544.jpg) ; object-fit: cover;">
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-md">
            <a class="navbar-brand text-light" href="#">Home Page</a>
        </div>
    </nav>
    <div class="container d-flex">
        <h3 class="my-3 text-light">Siswa</h3>
    </div>
    <div class="container">
        <div class="card border-0">
            <div class="card-body d-flex justify-content-center">
                <a href="index.php"><button type="submit" class="btn btn-danger">+ Enter Siswa</button></a>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <?php
                    include('config.php');
                    $allData = mysqli_query($connect, "SELECT * FROM list");
                    ?>
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col"></th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        while ($row = $allData->fetch_object()) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $number++ ?></th>
                                <td><img src="galerisekolah/<?php echo $row->foto ?>" alt="" style="width: 200px; height: 200px; object-fit:cover"></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <td style="width:5%"><a href="info.php?id=<?php echo $row->id ?>" class="btn btn-info text-light">Info</a></td>
                                <td style="width:5%"><a href="edit.php?id=<?php echo $row->id ?>" class="btn btn-warning text-light">Edit</a></td>
                                <td style="width:5%"><a href="delete.php?id=<?php echo $row->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>

                            </tr><?php
                                } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>