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
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

<?php

$mahasiswa = [
    ["nama" => "Frans kbarek", "nrp" => "9898", "jurusan" => "Teknik Informatika", "email" => "frans@gmail.com"],
    ["nrp" => "7777", "nama" => "Ferdinand", "jurusan" => "Teknik Mesin", "email" => "ferdinand@gmail.com"],
    ["nama" => "Fraka", "nrp" => "2233", "jurusan" => "Teknik Sipil", "email" => "fraka@gmail.com"],

];

$array = ["foo" => "bar", "bar" => "foo"];

// print_r($array);
?>



<?php foreach ($mahasiswa as $el): ?>
    <ul class="list">
        <li>Nama: <?=$el["nama"]?></li><br>
        <li>NRP: <?=$el["nrp"]?></li><br>
        <li>Jurusan: <?=$el["jurusan"]?></li><br>
        <li>Email: <?=$el["email"]?></li><br>
    </ul>
<?php endforeach;?>






</body>
</html>