<!-- BAHASA PHP JIKA DIGABUNG SAMA HTML MAKA DIA WAJIB ADA PEMBUKA DAN PENUTUP TAG PHP DALAM 1 FILE -->
<?php
$judul = "Pengesahan RUU Pilkada Batal, Berapa Batas Kuorum Rapat Paripurna DPR?";
$pembuat = "CNN Indonesia";
$isi = "Kami tegaskan sekali lagi karena kami patuh dan taat dan tunduk aturan pada saat pendaftaran nanti karena RUU Pilkada belum jadi UU maka yang berlaku adalah hasil putusan MK judicial review yang diajukan Partai Buruh dan Gelora demikian.";
$gambar = "https://akcdn.detik.net.id/visual/2024/08/22/sidang-paripurna-dpr-bahas-ruu-pilkada-ditunda-2_169.jpeg?w=650&q=90";
?>
<!-- PENUTUP PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1 HTML & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Class "CONTAINER" biar tidak mepet antara kanan dan kiri -->
    <div class="container">
        <div class="">
            <h1 class="text-center mt-1">HALAMAN 1</h1>
            <div class="card mx-auto my-5" style="width: 18rem;">
                <!-- CARA PEMANGGilan BAHASA PHP DI HTML -->
                <img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $judul ?></h5>
                    <!-- SUBSTR UNTUK MENGURANGI ATAU MEMOTONG KATA DI MULAI DARI 0 SAMPAI 150 KATA -->
                    <p class="card-text"><?php echo substr($isi, 0, 150) ?>...
                    <!-- TARGET _BLANK DIGUNAKAN UNTUK(Jika Perpindahan halaman html kita halaman yang lain dia bakal menambahkan tab baru) -->
                    <a
                            href="https://www.cnnindonesia.com/nasional/20240823064221-32-1136494/pengesahan-ruu-pilkada-batal-berapa-batas-kuorum-rapat-paripurna-dpr"
                            class="btn btn-primary" target="_blank">Lihat
                            Selengkapnya</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>