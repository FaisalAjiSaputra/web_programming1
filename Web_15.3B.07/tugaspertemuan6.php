<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 6</title>
</head>
<body>
<form action="" method="post">
    <table border="2">
        <h1>Rumus - Rumus</h1>
            <tr>
                <td>Nilai 1 </td>
                <td><input type = "text" name="nilai1"></td>
            </tr>

            <tr>
                <td>Nilai 2 </td>
                <td><input type = "text" name="nilai2"></td>
            </tr>

            <tr  align = "center">
                <td colspan ="2">
                    <input type="radio" name="rumus" value="Segitiga">Segitiga <br>
                    <input type="radio" name="rumus" value="Persegi Panjang">Persegi Panjang
                </td>
            </tr>
        <table>
            <tr>
                <td><input type="submit" name="hitung" value="Hitung"></td>
                <td><input type="reset" name="batal" value="Batal"></td>
            </tr>
</form>
</body>
<?php
if(isset($_POST['hitung'])) {
    $nilai1=$_POST['nilai1'];
    $nilai2=$_POST['nilai2'];
    $rumus=$_POST['rumus'];
    if ($nilai1>=0 || $nilai2 >=0){
        if ($rumus =="Segitiga"){
            $hasil = ($nilai1*$nilai2)/2;
            $tampil = "Segitiga";
        }else if ($rumus == "Persegi Panjang"){
            $hasil = ($nilai1*$nilai2);
            $tampil = "Persegi Panjang";
        }
    }else {
        $hasil = 0;
        $tampil ="Tidak ada Hasil Perhitungan";
    }

 ?>

<table>
<h3>HASIL HITUNG RUMUS</h3>
    <p><?php echo "Nilai 1 adalah = $nilai1"; ?></p>
    <p><?php echo "Nilai 2 adalah = $nilai2"; ?></p>
    <p><?php echo "Rumus yg dipilih adalah = $tampil"; ?></p>
    <p><?php echo "Hasil Perhitungan Rumus = $hasil"; ?></p>
    
    <?php
    }
    ?>
</html>