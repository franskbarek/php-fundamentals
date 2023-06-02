<?php

// connect ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data table mahasiswa
$result = mysqli_query($conn, "select * from mahasiswa");
// tangkap error ketika melakukan kesalahan sql query
if (!$result) {
    print mysqli_error($conn);
}
// ambil data menggunakan mysql fetch dari table mahasiswa
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

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
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?=$index?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td>
        <img src="../assets/<?=$row["gambar"]?>" alt="" width="100px">
    </td>
    <td><?=$row["nrp"]?></td>
    <td><?=$row["nama"]?></td>
    <td><?=$row["email"]?></td>
    <td><?=$row["jurusan"]?></td>
</tr>
<?php $index++;?>
<?php endwhile;?>

    </table>



</body>
</html>
