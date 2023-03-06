<?php 

    $rluas = '10';
    $rkeliling = '20';
    
    echo "<h4>Menghitung luas lingkaran</h4></br>";
    function luas_lingkaran($p, $r) {
        $luas = $p * $r * $r;
        return $luas; 
    }
    echo "Jari - Jari = $rluas cm.</br>";
    echo "Luas Lingkaran = ";
    echo luas_lingkaran(3.14, $rluas);
    echo " cm2";
    echo "<hr>";

    echo "<h4>Menghitung Keliling Lingkaran</h4></br>";
    function keliling_lingkaran($dua, $p, $r) {
        $keliling = $dua * $p * $r;
        return $keliling;
    }
    echo "Jari - jari = $rkeliling cm. </br>";
    echo "Keliling Lingkaran = ";
    echo keliling_lingkaran(2, 3.14, $rkeliling);
    echo " cm";
