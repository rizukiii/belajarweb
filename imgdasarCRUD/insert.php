<?php 
// disambungkan seperti biasa
include('config.php');
// ini digunakan saat ingin membuat file mengirim image
$foto =$_FILES['foto']['tmp_name'];

// ini adalah untuk mengubah penamaan nya
// untuk menggunakan nama buatan, file tersebut pakai comment ini 
$nama = time() . ".png";

// ini kalau ingin menggunakan nama asli

// $nama_file_asli = $_FILES['foto']['tmp_name'];


// ini untuk menaruh file img yang sudah di input oleh user dan dipindahkan ke file yang ingin digunakan dan wajib menggunakan '/' pada akhir kalimatnya

// ini untuk nama buatan
move_uploaded_file($foto, "foto_galeri/" . $nama);

// ini untuk nama asli
// move_uploaded_file($foto, "foto_galeri/" . $nama_file_asli);

// untuk mengconnect kan nya di mysql
mysqli_query($connect, "INSERT INTO list (foto) VALUES('$nama')");
// ini buat memindahkan lokasi page saat sudah berhasil mengirim img
header('location: index.php');
?>



                               <!-- CHMOD 777 -->