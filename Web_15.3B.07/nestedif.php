<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Nested if</title>
</head>
<body>
    <?php
    $nilai = 60;
    $presensi = 12 ;
    if ($nilai >80){
        if ($presensi>=10){
            $hasil ="A";
        }else{
            $hasil ="D";
        }    
    }elseif ($nilai>60){
        if($presensi>=10){
            $hasil ="B";
        }else{
            $hasil="D";
            }
        
        }else{
            if($presensi>=10){
                $hasil ="C";
            }else{
                $hasil="D";
            }
            }
            
        echo "Nilai Akhir : ".$hasil;   
        ?>
    
</body>
</html>