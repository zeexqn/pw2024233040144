<?php

$mahasiswa = [
    [
        "nama" => "Zeina Qurotun Nisa",
        "nrp" => "233040140",
        "email" => "zeinaqnurotunnisa@gmail.com"
    ],
    [
        "nama" => "Fitriyani Rahmadini",
        "nrp" => "233040120",
        "email" => "fitriyanirahmadini@gmail.com"
    ],
    [
        "nama" => "Ilona Aqila Zahra",
        "nrp" => "233040120",
        "email" => "ilonaaqilazahra@gmail.com"
    ],
    [
        "nama" => "Milda Khaerunnisa",
        "nrp" => "233040125",
        "email" => "mildakhaerunnisa@gmail.com"
    ],
    [
        "nama" => "Dera Triyadi Fafimah ",
        "nrp" => "233040146",
        "email" => "deratriyadifatimah@gmail.com"
    ],
    [
        "nama" => "Adinda Juliana Ruhiyat",
        "nrp" => "233040142",
        "email" => "adindajulianaruhiyat@gmail.com"
    ],
    [
        "nama" => "Anandita Putri Salsabila Athaya",
        "nrp" => "233040118",
        "email" => "ananditaputrisalsabila@gmail.com"
    ],
    [
        "nama" => "Denis Setya Pradana ",
        "nrp" => "233040146",
        "email" => "denissetyapradana@gmail.com"
    ],
    [
        "nama" => "Fadhilah Aditya Ahmad ",
        "nrp" => "233040148",
        "email" => "fadilahadityaahmad@gmail.com"
    ],
    [
        "nama" => "Syah Putra Sopiyan ",
        "nrp" => "233040145",
        "email" => "syahputrasopiyan@gmail.com"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>