<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Eskul</title>
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

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                data-mdb-collapse-init
                class="navbar-toggler"
                type="button"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="../../index.php">
                    <h5><a href="index.php">Homepage</a></h5>
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                    <li class="nav-item">
                        <a class="nav-link" href="../siswa/index.php">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pegawai/index.php">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../eskul/index.php">Eskul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kantin/index.php">Kantin</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Nav End -->
    <!-- Form Start -->
    <div class="container my-5">
        <div class="card">
            <div class="card-header">Halaman Input Eskul</div>
            <div class="card-body">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <form>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name="namaeskul" class="form-control" />
                            <label class="form-label">Nama Eskul</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name="tempateskul" class="form-control" />
                            <label class="form-label">Tempat Eskul</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="number" name="waktueskul" class="form-control" />
                            <label class="form-label">Waktu Eskul</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name="jumlahsiswa" class="form-control" />
                            <label class="form-label">Jumlah Siswa</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="file" name="fotoeskul" class="form-control" />
                        </div>
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
    <!-- Form End -->
</body>

</html>