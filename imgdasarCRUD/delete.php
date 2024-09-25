<?php
include('config.php');
// untuk mengambil id
$id = $_GET['id'];
// ini untuk memilih foto yang ada di mysql berdasarkan id
$query = mysqli_query($connect, "SELECT foto FROM list WHERE id='$id'");
// ini ontuk mengubah data array menjadi fetch object
$row = $query->fetch_object();
// untuk melakukan perintah jika ada foto didalam folder galeri dan namanya tersedia dia akan melakukan perintah
$nama_foto = $row->foto;
if (file_exists("foto_galeri/" . $nama_foto)) {
    // dia akan menghapus atau unlink foto tersebut menggunakan metode unlink
    // ini untuk menghapus data yang berada di vscode
    unlink("foto_galeri/" . $nama_foto);
}
// untuk menghapus img yang ada di mysql berdasarkan id di table list
mysqli_query($connect, "DELETE FROM list WHERE id='$id'");
header('location: index.php');
