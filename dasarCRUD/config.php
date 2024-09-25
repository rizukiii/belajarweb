<?php 
// ini hostname dari local hostkita
$hostname = 'localhost';
// ini username root , user default kita
$username = 'root';
// ini passwordnya kosongan atau null
$password = '';
// ini nama daridatabase nya yang kita pilih apa
$dbName = 'todolist';
// mysqli_connect untuk menyambungkan kita kedatabase yang kita pilih jika gagal maka akan menampilkan tidak bisa konek kedatabase
$connect = mysqli_connect($hostname, $username, $password, $dbName) or die("could not connect to database");

?>