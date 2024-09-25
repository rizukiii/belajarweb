<?php

// variable sekolah menyimpan data array
// 'id' sebagai array key dan sebagai nilai / value
// array ke 'alamat menyimpan lebih dari satu 
// kalau mau memanggil 'city' harus memmangil array sebelumnya terlebih dahulu sperti 'alamat'
$sekolah = [
    'id' => 1,
    'nama' => 'SMKN 1 JAKARTA',
    'nama' => null,
    'nama' => 'SMKN 2 JAKARTA',
    'alamat' => array(
        'street' => 'jalan ibukota',
        'city' => 'jakarta',
        'Country' => 'Indonesia',
    )
    ];
    var_dump($sekolah['nama'])
?>