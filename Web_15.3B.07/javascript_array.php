<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javaScript_Array</title>
</head>
<body>
    <script type="text/javaScript">
        var tanggal = new Date ()
        var hari = new Array ("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
        var bulan = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

        document.write(hari[tanggal.getDay()-1] +" ")
        document.write(tanggal.getDate() +" ")
        document.write(bulan[tanggal.getMonth()] +" ")
        document.write(tanggal.getFullYear() +" ")
        </Script>
        </body>
</html>