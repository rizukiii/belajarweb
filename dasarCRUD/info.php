<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Detail Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- PHP LANGUAGE -->
    <?php
    include('config.php');
    $id = $_GET['id'];
    $getData = mysqli_query($connect, "SELECT * FROM list WHERE id = '$id'");
    $row = $getData->fetch_object();
    ?>
    <div class="container">
        <!-- Header -->
        <h1 class="text-center  my-5">Detail Todo <span class="text-primary">List</span></h1>
        <!-- Card Section -->
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between px-3 align-items-center">
                    
                    <div>
                        <a href="index.php" class="btn btn-outline-primary"><i class="fa-solid fa-chevron-left"></i></a>
                    </div>
                    <div class="">
                        <h1><?php echo $row->data ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- text area untuk berita dan tiadakbisa dikasi values biasanya di cetak languange php di dalamnya -->