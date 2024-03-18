<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    $bil1 = 100 ;
    $bil2 = 20 ;

    $teks1 = "PHP";
    $teks2 = "php";

    //rumus
    $hasilsamadengan = $bil1 == $bil2 ;
    $hasiltidaksamadengan = $bil1 != $bil2 ;
    $hasillebihbesar = $bil1 > $bil2 ;
    $hasillebihbesarsamadengan = $bil1 >= $bil2 ;
    $hasillebihkecil = $bil1 < $bil2 ; 
    $hasillebihkecilsamadengan = $bil1 <= $bil2 ;

    $hasilsamadengan2 = $teks1 == $teks2 ;
    $hasiltidaksamadengan2 = $teks1 != $teks2 ;
    ?>
<pre>
<?php    
echo"$bil1 == $bil2 = $hasilsamadengan <br>";
echo"$bil1 != $bil2 = $hasiltidaksamadengan <br>";
echo"$bil1 > $bil2 =  $hasillebihbesar <br>";
echo"$bil1 >= $bil2 = $hasillebihbesarsamadengan <br>";
echo"$bil1 < $bil2 = $hasillebihkecil <br>";
echo"$bil1 <= $bil2 = $hasillebihkecilsamadengan <br>";
echo"$teks1 == $teks2 = $hasilsamadengan2 <br>";
echo"$teks2 != $teks2 = $hasiltidaksamadengan <br>";

?>
</pre>
</body>
</html>