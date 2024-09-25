<?php
include('config.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT fotoBerita FROM list WHERE id='$id'");

$row = $query->fetch_object();

$fotoBerita = $row->fotoBerita;

if(file_exists("galerifoto/" . $fotoBerita)){
    unlink("galerifoto/" . $fotoBerita);
}

mysqli_query($connect, "DELETE FROM list WHERE id='$id'");
header('location: home.php');
?>