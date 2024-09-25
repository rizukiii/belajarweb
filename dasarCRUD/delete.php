<?php 
// selalu gunakan include untuk menyambungkan halaman ini ke halaman database
include('config.php');
// ini adalah perintah jika kita ingin mengambil data itu /menghapus/bisa digunakan untuk fitur search
$id = $_GET['id'];
// perintah dibawah ini untuk menyambungkan ke mysql database(connect), delete from -> hapus dari ,list=tabel list di mysql, where adalah data dalam tabel list itu adalah yang mana yang mau dihapus, kalo ini id biasanya
mysqli_query($connect, "DELETE FROM list WHERE id= '$id'");
// perintah dibawah untuk mengalihkan seusai berhasil menghapus data dari mysql
header('location:index.php');
?>