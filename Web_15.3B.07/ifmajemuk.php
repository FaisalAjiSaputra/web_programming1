<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If Majemuk</title>
</head>
<body>
    <?php
    $nilai = 85;
    if (($nilai >=85) && ($nilai <=100)){ //85-100
        $grade = "A";    
    }elseif (($nilai >=75) && ($nilai <=85)){ //75-84
        $grade = "B";    
    }elseif (($nilai >=60) && ($nilai <=74)){ //60-74
        $grade = "C";
    }elseif (($nilai >=50) && ($nilai <=59)){ //50-59
        $grade = "D"; 
    }elseif (($nilai >=0) && ($nilai <=49)){ //0-49
        $grade = "E";  
    }else {
        echo "Maaf, nilai diluar jangkauan";
    }         

    echo "Nilai Anda $nilai,di konversi menjadi $grade";
    ?>
</body>
</html>