<?php
// $nama = "nurul";

// $nama = null;

// echo $nama;

// $valueINT = (string) "123";
// var_dump("nama saya hendra saya \n tinggal di jakarta");

// VARIABLE SEKOLAH MENYIMPAN DATA ARRAY
// "id" sebagai array key dan 1 sebagai nilai / value
// array key "alamat" menyimpan data lebih dari satu
// kalau mau memanggil city didalam array alamat harus masuk ke alamat terlebih dahulu, baru masuk lebih spesifik mau pilih data yang mana

// array dalam array
$sekolah = [
    'id' => 1,
    'nama' => 'SMKN 1 Jakarta',
    'nama' => null,
    'nama' => 'SMKN 2 Jakarta',
    'alamat' => array(
        'street' => 'jl Ibukota',
        'city' => 'Jakarta',
        'country' => 'Indonesia'
    )
];

var_dump($sekolah['nama']);

// echo <<<contoh
// ini adalah contoh string yang panjang tidak memerlukan 
// slice n untuk entered
// contoh;
