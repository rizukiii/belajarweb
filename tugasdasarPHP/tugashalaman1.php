<?php
$gambar = "https://cdn.antaranews.com/cache/1200x800/2023/09/07/5f2194d7-c9fb-4881-90ce-886d210e46b0.jpeg" ;
$judul = "Wisata Gunung Bromo ditutup total akibat kebakaran hutan dan lahan";
$isi = "Malang, Jawa Timur (ANTARA) - Balai Besar Taman Nasional Bromo Tengger Semeru (BB TNBTS) memutuskan untuk menutup total aktivitas wisata dari semua pintu masuk menuju kawasan Gunung Bromo akibat kebakaran yang terjadi pada Blok Savana Lembah Watangan, atau Bukit Telletubies.
Kepala Bagian Tata Usaha Balai Besar TNBTS Septi Eka Wardhani di Kota Malang, Jawa Timur, Kamis mengatakan bahwa penutupan tersebut dilakukan untuk kelancaran proses pemadaman dan keamanan oengunjung akibat kebakaran yang terjadi pada 6 September 2023.

“Kegiatan wisata Gunung Bromo ditutup secara total mulai Rabu malam (6/9) pukul 22.00 WIB,” kata Septi.

Septi menjelaskan penutupan akses wisata ke kawasan taman nasional akibat kebakaran hutan dan lahan di area savana kaldera Tengger tersebut dilakukan hingga batas waktu yang belum ditentukan. Dalam kurun waktu sepekan terakhir, BB TNBTS telah beberapa kali menutup sejumlah akses wisata akibat kebakaran hutan dan lahan.

Pada saat itu, kebakaran hutan dan lahan yang terjadi di kawasan taman nasional termasuk pada area Perum Perhutani yang berdekatan dengan TNBTS sudah tertangani dan kemudian akses bagi wisatawan tersebut kembali dibuka. Namun, pada 6 September 2023 kembali terjadi kebakaran hutan dan lahan.

“Akibat kebakaran yang terjadi di savana kaldera Tengger, penutupan dilakukan hingga batas waktu yang belum bisa ditentukan,” ujarnya.

Ia menambahkan, bagi pengunjung yang telah melakukan pembelian karcis melalui booking online, dapat mengajukan penjadwalan ulang saat wisata Gunung Bromo kembali dibuka. Terkait dengan tata cara penjadwalan ulang, akan diinformasikan lebih lanjut oleh Balai Besar TNBTS.

“Pengunjung bisa melakukan reschedule saat wisata Gunung Bromo kembali dibuka,” ujarnya.

Sebagai informasi, akses wisata Gunung Bromo memiliki empat pintu masuk yakni mulai dari Probolinggo, di Desa Ngadisari, Kecamatan Sukapura, dan dari Pasuruan di Desa Wonokitri, Kecamatan Tosari.

Kemudian, dari Kabupaten Lumajang, serta pada pintu masuk Jemplang, Kecamatan Poncokusumo, Kabupaten Malang. Penutupan akses wisata tersebut dikeluarkan BB TNBTS melalui Pengumuman nomor PG.08/T.8/BIDTEK/9/2023.

Kawasan Gunung Bromo merupakan salah satu destinasi wisata unggulan di Jawa Timur. Pada 2022, tercatat dikunjungi sebanyak 318.919 wisatawan, yang terbagi dari 310.418 pengunjung merupakan wisatawan nusantara dan sebanyak 8.501 merupakan wisatawan asing.

Dari total jumlah kunjungan wisatawan ke Bromo sepanjang 2022 tersebut, ada Pendapatan Negara Bukan Pajak (PNBP) mencapai Rp11,65 miliar, yang meningkat jika dibandingkan tahun sebelumnya yang sebanyak Rp4,85 miliar.";
$update =" Kamis, 7 September 2023 8:57 WIB";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS HALAMAN 1 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div>
            <h2 class="bg-dark text-light text-center">Selamat Datang di Web Berita</h2>
            <div class="card mx-auto mt-5" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $gambar ?>" class="img-fluid rounded-start" alt="Gunung Bromo Kebakaran">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $judul ?></h5>
        <p class="card-text"><?php echo substr($isi, 0, 960)?><button type="button"><a href="https://gorontalo.antaranews.com/berita/229437/wisata-gunung-bromo-ditutup-total-akibat-kebakaran-hutan-dan-lahan"></a>...</p></button>
        <p class="card-text"><small class="text-muted"></small><?= $update ?></p>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</body>
</html>