<?php
include('config.php');
$fotoBerita     = $_FILES['fotoBerita']['tmp_name'];
$isiBerita      = $_POST['isiBerita'];
$judulBerita    = $_POST['judulBerita'];

$nama = time() . ".png";
move_uploaded_file($fotoBerita, "galerifoto/" . $nama);

mysqli_query($connect, "INSERT INTO list (fotoBerita, judulBerita, isiBerita) VALUES('$nama','$judulBerita','$isiBerita')");

header('location: home.php');
