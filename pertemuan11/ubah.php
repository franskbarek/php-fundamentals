<?php

require "helper.php";

// get id onclicked
$id = $_GET["id"];

// function query from helper
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol submit telah ditekan
if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah atau tidak
    if (updateData($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('Data gagal diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <?php foreach ($mahasiswa as $mhs): ?>
            <input type="hidden" name="id" value="<?=$mhs["id"];?>">
            <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?=$mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?=$mhs["nama"];?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?=$mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?=$mhs["gambar"];?>">
            </li>
            <li>
               <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
        <?php endforeach;?>
    </form>
</body>
</html>
