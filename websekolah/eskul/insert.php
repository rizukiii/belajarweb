<?php 
include('../../config.php');
$nama_eskul = $_POST['namaeskul'];
$tempat_eskul = $_POST['tempateskul'];
$waktu_eskul = $_POST['waktueskul'];
$jumlah_siswa = $_POST['jumlahsiswa'];
$foto_lama = $_FILES['fotoeskul']['tmp_name'];

$foto_baru = time() . ".png";

move_uploaded_file($foto_lama,"fotoeskul/" . $foto_baru);

mysqli_query($connect,"INSERT INTO eskul (namaeskul, tempateskul, waktueskul, jumlahsiswa, fotoeskul) VALUES('$nama_eskul','$tempat_eskul','$waktu_eskul','$jumlah_siswa','$foto_baru");

header('location: ../home.php');


?>