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
    <style>
        *{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

        }
        .header-title{
            font-size: 40px;
            display: flex;
            text-align: center;
            margin-bottom: 70px;

        }
        .container{
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
        }
        .function-onheader{
            display: flex;
            flex-flow: row-reverse wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .search{
            padding: 8px;
            border-top: none;
            border-right: none;
            border-left: none;
        }
        .button-search{
            font-size: 15px;
            padding:10px 40px 10px 40px;
            margin-right: 30vh;
            border-radius: 20px;
            border: 0;
            background-color: gray;
            color: white;
        }
        .button-search:hover{
            color: orange;
        }
        .addData{
            font-size: 15px;
            color: white;
            text-decoration: none;
            padding: 10px;
            background-color: gray;
            border-radius: 20px;
        }
        a{
            color: inherit;
            cursor: default;
        }
        a:hover{
            color: orange;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 class="header-title">Daftar mahasiswa</h1>

<div class="function-onheader">
    <a href="tambah.php" class="addData">+ Data Mahasiswa</a>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" placeholder="Cari..." autofocus autocomplete="off" class="search">
        <button type="submit" name="search" class="button-search">Cari</button>
    </form>
</div>


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



</div>
</body>
</html>
