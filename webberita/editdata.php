<?php
include('config.php');
$id = $_POST['id'];
$fotoBerita = $_FILES['fotoBerita']['tmp_name'];
$judulBerita = $_POST['judulBerita'];
$isiBerita = $_POST['isiBerita'];

$result = mysqli_query($connect, "SELECT fotoBerita FROM list WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if ($_FILES['fotoBerita']['error'] == UPLOAD_ERR_OK ){

    $foto_baru = time() . ".png";

    move_uploaded_file($_FILES['fotoBerita']['tmp_name'],"./galerifoto/" . $foto_baru);

    mysqli_query($connect, "UPDATE list SET fotoBerita = '$foto_baru' WHERE id='$id'");

    if (file_exists("./galerifoto/" . $foto_lama))
        unlink("./galerifoto/" . $foto_lama);
    
}



mysqli_query($connect, "UPDATE list SET judulBerita = '$judulBerita', isiBerita = '$isiBerita' WHERE id ='$id'");


header('location: home.php');
?>