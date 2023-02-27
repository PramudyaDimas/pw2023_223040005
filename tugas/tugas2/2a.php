<?php
$ndepan = "Pramudya";
$nbelakang = "Dimas";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nbelakang $ndepan";
    } else if ($i % 3 == 0) {
        echo "$ndepan";
    } else if ($i % 5 == 0) {
        echo "$nbelakang";
    } else {
        echo $i;
    }
    echo "<br>";
}
