<?php 
include('config.php');
$id = $_POST['id'];
$foto = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$result = mysqli_query($connect, "SELECT foto FROM list WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if ($_FILES['foto']['error'] == UPLOAD_ERR_OK){
  
    $foto_baru = time() . ".png";

    mysqli_query($connect, "UPDATE list SET foto = '$foto_baru' WHERE id='$id'");

    move_uploaded_file($foto_baru, "./galerisekolah/" . $foto_lama); 
    
    if(file_exists("./galerisekolah/" . $foto_lama)){
        unlink("./galerisekolah/" . $foto_lama);
    }
};

mysqli_query($connect, "UPDATE list SET nama = '$nama', kelas = '$kelas' WHERE id='$id'");
header('location: home.php');
?>