<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .list{
            margin: 10px;
            font-size: large;
        }
        .clear{
            clear:both;
        }
        .head{
            margin-bottom: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1 class="head">GET</h1>
    <h3>Detail Mahasiswa</h3>


<?php

if (!isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>




<ul class="list">

    <li>Nama: <?=$_GET["nama"];?></li>
    <li>NRP: <?=$_GET["nrp"];?></li>
    <li>Jurusan: <?=$_GET["jurusan"];?></li>
    <li>Email: <?=$_GET["email"];?></li>

</ul>



<a href="latihan1.php">Kembali</a>



</body>
</html>