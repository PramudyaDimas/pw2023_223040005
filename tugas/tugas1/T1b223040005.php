<?php
$nim = '5';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1b223040005</title>
</head>

<body>
    <p>
        <?php
        echo "Aku adalah angka <b> $nim </b> <br>";
        // perkalian
        $hasilkali = $nim * 5;
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b> $hasilkali </b><br> ";
        // pembagian
        $hasilbagi = $hasilkali / 2;
        echo "Jika aku dibagi 2, maka aku sekarang menjadi <b> $hasilbagi </b> <br> ";
        // penambahan
        $hasiltambah = $hasilbagi + 75;
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b> $hasiltambah </b> <br> ";
        // pengurangan
        $hasilkurang = $hasiltambah - 20;
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b> $hasilkurang </b> <br> ";
        ?>


    </p>

</body>

</html>