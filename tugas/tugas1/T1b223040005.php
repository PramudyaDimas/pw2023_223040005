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
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>" . ($nim = $nim * 5) . "</b><br> ";
        // pembagian
        echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>" . ($nim = $nim / 2) . "</b> <br> ";
        // penambahan
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>" . ($nim = $nim + 75) . " </b> <br> ";
        // pengurangan
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>" . ($nim = $nim - 20) . " </b> <br> ";
        ?>


    </p>

</body>

</html>