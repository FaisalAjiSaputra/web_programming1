<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $namaDepan = "Muhamad";
        $namaBelakang = "Zikri";

        #menggabungkan dua variabel dengan tanda petik dua
        $namaLengkap = "{$namaDepan} {$namaBelakang}";

        #menggabungkan string dengan menggunakan tanda titik
        $namaLengkap2 = $namaDepan .''. $namaBelakang;

        #tampilkan data
        echo "Nama Depan: {$namaDepan}<br>";
        echo "Nama Belakang: {$namaBelakang}<br>";
        echo $namaLengkap;
    ?>
</body>
</html>