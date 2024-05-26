<?php

require 'function.php';

//cek apakah tombol submt sudah di tekan atau belum

if(isset($_POST["submit"])) {
    
   //ambil data dari tiap elemen dalam form
    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil di tambahkan');
            document.location.href= 'index.php';
        </script>
        ";
    } else{
        echo"
        <script>
        alert('data gagal di tambahkan!');
        document.location.href= 'index.php';
         </script>
        ";
    }


 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>

    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" require>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="email"> EMAIL :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan"> JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar"> GAMBAR :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
            
        </ul>
    </form>
</body>
</html>