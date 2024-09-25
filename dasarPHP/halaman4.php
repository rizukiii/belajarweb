<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan HTML & PHP : Halaman 4 While</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <ul class="list-group my-5">
            <?php
            // VARIABLE i menyimpan number 1
            $i = 1;

            // variable i akan melakukan perulangan sampai 10
            // jika tidak kita setting perulangannya maka si variable i bakal melakukan perulangan secara terus menerus 
            while ($i <= 10):
                ;
                ?>
                <li class="list-group-item">Item - <?= $i ?></li>
                <?php
                // INCREMENT
                $i++;
                // KALAU MINUS --$i namanya DECREMENT
            endwhile;
            ?>
        </ul>
    </div>
</body>

</html>