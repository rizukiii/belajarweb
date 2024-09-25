<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT foto FROM list WHERE id='$id'");

$row = $query->fetch_object();

$nama_foto = $row->foto;
if(file_exists("galerisekolah/" . $nama_foto)){
    unlink("galerisekolah/" . $nama_foto);
}

mysqli_query($connect, "DELETE FROM list WHERE id= '$id'");
header('location: home.php');
?>