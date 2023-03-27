<?php
$mahasiswa = [
    ["nama" => "Pramudya", "nrp" => "223456789", "email" => "pramudms@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil.jpg"],
    ["nama" => "Fauzan Dwi", "nrp" => "223456789", "email" => "fauzandwi@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil.jpg"],
    ["nama" => "Ahmad Mulia Huda", "nrp" => "223456789", "email" => "Ahmadmh@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil.jpg"],
    ["nama" => "Novan Ramdan", "nrp" => "223456789", "email" => "NovanR@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil.jpg"],
    ["nama" => "Refin", "nrp" => "223456789", "email" => "Refin@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil.jpg"],
    ["nama" => "Bintang Arya", "nrp" => "223456789", "email" => "BintangAP@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil2.png"],
    ["nama" => "Diaz", "nrp" => "223456789", "email" => "DiazAR@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil2.png"],
    ["nama" => "Hikmal", "nrp" => "223456789", "email" => "HikmalRP@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil2.png"],
    ["nama" => "Dimas Hidayatullah", "nrp" => "223456789", "email" => "DimasH@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil2.png"],
    ["nama" => "Daffa", "nrp" => "223456789", "email" => "dan@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "profil2.png"],


];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5</title>
    <style>
        img {
            width: 300px;
            height: 280px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>nama: <?= $mhs["nama"]; ?> </li>
            <li>nama: <?= $mhs["nrp"]; ?> </li>
            <li>nama: <?= $mhs["email"]; ?> </li>
            <li>nama: <?= $mhs["jurusan"]; ?><br><br><br></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>