<?php
include('config.php');
$id = $_POST['id'];

$result = mysqli_query($connect, "SELECT foto FROM list WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    
    $foto_baru = time() . ".png";

    move_uploaded_file($_FILES['foto']['tmp_name'], "./foto_galeri/" . $foto_baru);


    mysqli_query($connect, "UPDATE list SET foto = '$foto_baru' WHERE id='$id'");

    if (file_exists("./foto_galeri/" . $foto_lama))
        unlink("./foto_galeri/" . $foto_lama);

}
// mysqli_query($connect, "UPDATE list SET isi = '$isi' judul = '$judul' WHERE id='$id'");

header('location:index.php');
