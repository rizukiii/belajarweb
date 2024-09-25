<?php 
// seperti biasanya kit aperlu menyambungkan halaman ini dengan terminal mysql kita dengan"include"
include('config.php');
// kita post disini untuk mengirim data dari halaman index, iasnya lupa di id ini belum di set
$id = $_POST['id'];
$data = $_POST['data'];
mysqli_query($connect, "UPDATE list SET data ='$data' WHERE id ='$id' ");
header('location: index.php');
// seperti biasanya jangan lupa untuk menulis perintah diatas ini
?>