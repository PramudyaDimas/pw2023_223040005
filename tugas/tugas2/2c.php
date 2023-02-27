<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>

    <style>
        .kotak {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border: 1px black;
            margin-right: 0px;
            background-color: gold;
        }
    </style>
</head>

<body>

    <?php
    $n = 5;
    for ($i = 10; $i >= 1; $i--) {
        for ($x = 1; $x <= $i; $x++) {
            echo "<div class='kotak'>$x</div>";
        }
        echo "<br>";
    }
    ?> </body>

</html>