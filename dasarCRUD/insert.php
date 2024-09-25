<?php
// ini untuk memanggil file diluar file kit atau extend file
include('config.php');
// in buat aksi mengirim datanya
$data = $_POST['data'];
// ini comment untuk menjalankan database menggunakan variable connet danbuat input atau memasukkan data ke tabel mana di phpmyadmin dan bernilai atau berisi apa(values)
mysqli_query($connect, "INSERT INTO list (data) VALUES('$data')");
// ini perintah untuk setelah kita nginput data ke sistem akan berpindah kemana
header('location: index.php');
?>