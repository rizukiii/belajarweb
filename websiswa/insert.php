<?php
include('config.php');
$foto = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$foto_buatan = time() . ".png";


move_uploaded_file($foto, "galerisekolah/" . $foto_buatan);

mysqli_query($connect, "INSERT INTO list (foto, nama, kelas) VALUES('$foto_buatan','$nama','$kelas')");

header('location: home.php');
?>