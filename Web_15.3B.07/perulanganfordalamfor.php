<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post"></form>
        <select name="tanggal">
            <option value="tanggal">-== Pilih Tanggal ==-</option>

             <!-- Cara Ke 1 -->
            <?php
            for($tanggal=1; $tanggal<=31; $tanggal++){
                echo"<option value='$tanggal'>$tanggal</option>";
            }
            ?>

        <?php
            for($tanggal2=1; $tanggal2<=31; $tanggal2++) : ?>
                <option value="<?= $tanggal2 ?>"><?= $tanggal2 ?></option>
                <?php endfor; ?>

        </select>
                <br><br>
                <select name="tanggal2">
                    <option value="tanggal2">-== Pilih Tanggal ==-</option>

                    <!-- Cara Ke 2 -->
                    <?php for($tanggal2=1; $tanggal2<31; $tanggal2++) : ?>
                        <option value="<?= $tanggal2 ?>"><?= $tanggal2 ?></option>
                        <?php endfor; ?>
        </form>
</body>
</html>l