<?php 
include('config.php');
$foto       = $_FILES['foto']['tmp_name'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$hargatiket = $_POST['hargatiket'];
$open       = $_POST['open'];
$closed     = $_POST['closed'];

$foto_baru = time() . ".png";
move_uploaded_file($foto,"galeriwisata/" . $foto_baru);

mysqli_query($connect, "INSERT INTO list (foto, nama, alamat, hargatiket, `open`, `closed`) VALUES('$foto_baru','$nama','$alamat','$hargatiket','$open','$closed')");

header('location: home.php')
?>