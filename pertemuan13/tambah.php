<?php

require "helper.php";

// cek apakah tombol submit telah ditekan
if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (addingData($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('Data gagal ditambahkan!');
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
    <title>Tambah data mahasiswa</title>
    <style>
        li{
            display: flex;
            flex-direction: column;
            width: 400px;

        }
        label{
            margin-left: 10px;
        }
        input{
            padding: 5px;
            margin: 10px 10px;
        }
        button{
            font-size: medium;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
