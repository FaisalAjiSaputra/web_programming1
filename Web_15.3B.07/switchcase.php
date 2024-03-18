<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Switch case</title>
</head>
<body>
    <?php
    $angka = 10;
    switch ($angka){
        case 0 :
            $terbilang ="Nol";
            break;
             
        case 1 :
            $terbilang ="satu";
            break;
         
        case 2 :
            $terbilang ="dua";
            break;
               
        case 3 :
            $terbilang ="tiga";
            break;
         
        case 4 :
            $terbilang ="empat";
            break;
             
        case 5 :
            $terbilang ="lima";
            break;
         
        case 6 :
            $terbilang ="enam";
            break;
       
        case 7 :
            $terbilang ="tujuh";
            break;
   
        case 8 :
            $terbilang ="delapan";
            break;
         
        case 9 :
            $terbilang ="sembilan";
            break;
            default :
            $terbilang = "Angka diluar jangkauan";
            break;
    }
    echo "Bentuk terbilang dari $angka adalah $terbilang";
    ?>
</body>
</html>