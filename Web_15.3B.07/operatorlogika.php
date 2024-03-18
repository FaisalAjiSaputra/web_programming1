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
    $hasil1 = ($bil1 <> $bil2) or ($teks1 == $teks2);
    $hasil2 = !($teks1 == $teks2);
    ?>
<pre>
<?php
echo "$bil1 <> $bil2 or $teks1 == $teks2 adalah $hasil1 <br>";
echo "!($teks1 == $teks2) adalah $hasil2";
?>
</body>
</html>    