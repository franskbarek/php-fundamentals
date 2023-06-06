<?php

// connect ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// function get result
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function add table data
function addingData($data)
{

    global $conn;
    // ambil data hasil input form
    $nrp = htmlspecialchars($data["nrp"]); //int
    $nama = htmlspecialchars($data["nama"]); //varchar
    $email = htmlspecialchars($data["email"]); //varchar
    $jurusan = htmlspecialchars($data["jurusan"]); //varchar
    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    // insert data ke database
    $query_insert = "INSERT INTO mahasiswa (nama, nrp, jurusan, email, gambar) VALUES ('$nama', $nrp, '$jurusan', '$email', '$gambar')";

    mysqli_query($conn, $query_insert);

    return mysqli_affected_rows($conn);
}

// uplodad
function upload()
{
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // cek ketika gambar tidak di upload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!')</script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

    $ekstensiGambar = explode('.', $namaFile);

    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {

        echo "<script>alert('Format gambar tidak didukung!')</script>";

        return false;
    }

    // cek ukuran gambar, ukuran maksimum 1mb
    if ($ukuranFile > 1000000) {

        echo "<script>alert('Batas maksimum gambar 1mb!')</script>";

        return false;
    }

    // ketika gambar lolos pengecekan, maka gambar siap diupload

    // generate nama baru
    $namaFileBaru = uniqid();

    $namaFileBaru .= ".";

    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/' . $namaFileBaru);

    return $namaFileBaru;
}

// delete
function deleteData($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// update data
function updateData($data)
{

    global $conn;

    // ambil data hasil input form
    $nrp = htmlspecialchars($data["nrp"]); //int
    $nama = htmlspecialchars($data["nama"]); //varchar
    $email = htmlspecialchars($data["email"]); //varchar
    $jurusan = htmlspecialchars($data["jurusan"]); //varchar
    $gambar = htmlspecialchars($data["gambar"]); //varhar
    $id = htmlspecialchars($data["id"]); //varhar

    mysqli_query($conn, "UPDATE mahasiswa SET nama = '$nama', nrp = $nrp,  jurusan = '$jurusan', email = '$email', gambar = '$gambar' WHERE id = $id");

    return mysqli_affected_rows($conn);

}

// function search
function search($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR email LIKE '%$keyword%'";

    return query($query);

}
