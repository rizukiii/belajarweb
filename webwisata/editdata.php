<?php 
include('config.php');
$id = $_POST['id'];
$foto = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hargatiket = $_POST['hargatiket'];
$open = $_POST['open'];
$closed = $_POST['closed'];

$result = mysqli_query($connect, "SELECT foto FROM list WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    
    $foto_baru = time() . ".png";

    move_uploaded_file($_FILES['foto']['tmp_name'], "./galeriwisata/" . $foto_baru);

    mysqli_query($connect, "UPDATE list SET foto = '$foto_baru' WHERE id='$id'");

    if(file_exists("./galeriwisata/" . $foto_lama))
        unlink("./galeriwisata/" . $foto_lama);

}

$allData = mysqli_query($connect, "UPDATE list SET nama = '$nama', alamat = '$alamat', hargatiket = '$hargatiket', `open` = '$open', `closed` = '$closed' WHERE id='$id'");
header('location: home.php');
?>


