<?php

require 'function.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswsa berdassarkan id nya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id") [0];


//cek apakah tombol submt sudah di tekan atau belum

if(isset($_POST["submit"])) {
    
   //cek apakah data berhasil di ubah atau tidak
    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href= 'index.php';
        </script>
        ";
    } else{
        echo"
        <script>
        alert('data gagal diubah!');
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
    <title>ubah data mahasiswa</title>
</head>
<body>

    <h1>ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?=$mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" require value="<?=$mhs["nama"];?>">
            </li>
            <li>
                <label for="email"> EMAIL :</label>
                <input type="text" name="email" id="email" value="<?=$mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan"> JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar"> GAMBAR :</label>
                <input type="text" name="gambar" id="gambar" value="<?=$mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah Data!</button>
            </li>
            
        </ul>
    </form>
</body>
</html>