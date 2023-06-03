<?php

require "helper.php";

// function query fron helper
$mahasiswa = query("select * from mahasiswa;");

// check search event
if (isset($_POST["search"])) {
    $mahasiswa = search($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>

    <h1>Daftar mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>


    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Cari..." autocomplete="off">
        <button type="submit" name="search">Cari</button>
    </form>
    <br>


    <table border="1" cellpadding="10" cellspace="0">


<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<?php $index = 1;?>
<?php foreach ($mahasiswa as $row): ?>
<tr>
    <td><?=$index?></td>
    <td>
        <a href="ubah.php?id=<?=$row["id"]?>">ubah</a> |
        <a href="hapus.php?id=<?=$row["id"]?>" onclick="return confirm('yakin?');">hapus</a>
    </td>
    <td>
        <img src="../assets/<?=$row["gambar"]?>" alt="" width="50px">
    </td>
    <td><?=$row["nrp"]?></td>
    <td><?=$row["nama"]?></td>
    <td><?=$row["email"]?></td>
    <td><?=$row["jurusan"]?></td>
</tr>
<?php $index++;?>
<?php endforeach;?>

    </table>



</body>
</html>
