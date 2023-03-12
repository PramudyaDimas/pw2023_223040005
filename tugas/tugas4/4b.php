<?php
// membuat array nama perangkat keras
$perangkatkeras = ["Motherboard", "Processor", "Hard Disk", "Power Supply", "VGA Card", "SSD"];

// menampilkan isi array menggunakan looping
echo "<h2>Macam-macam perangkat keras komputer</h2>";
echo "<ol>";
foreach ($perangkatkeras as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";

// menambahkan dua elemen baru pada array
$perangkatkeras[] = "Printer";
$perangkatkeras[] = "Flash Disk";

// mengurutkan array (A-Z)
sort($perangkatkeras);

// menampilkan isi array setelah ditambahkan dan diurutkan
echo "<h2>Macam-macam perangkat keras komputer Baru</h2>";
echo "<ol>";
foreach ($perangkatkeras as $item) {
    // warna merah adalah elemen baru
    $label = in_array($item, ["Printer", "Flash Disk"]) ? "<span style='color:gold;text-decoration:underline;'>$item</span>" : $item;
    echo "<li>$label</li>";
}
echo "</ol>";
