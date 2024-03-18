<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <?php
    // Menghitung Luas Lingkaran
        define("JUDUL", "Hitung Luas Lingkaran");
    
    // Konstanta phi
        define("PHI", 3.14);
    
    // Vaariabe Jari-Jari & Luas    
        $r = 10;
        $luas = PHI*$r*$r;

    // Tampilan Output
        echo JUDUL."<br>";
        echo "Jari-jari lingkaran = $r <br>";
        echo "Luas Lingkaran = $luas";

    ?>    
</body>
</html>