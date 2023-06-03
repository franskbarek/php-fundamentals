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
    $nrp = $data["nrp"]; //int
    $nama = $data["nama"]; //varchar
    $email = $data["email"]; //varchar
    $jurusan = $data["jurusan"]; //varchar
    $gambar = $data["gambar"]; //varhar

    // insert data ke database
    $query_insert = "INSERT INTO mahasiswa (nama, nrp, jurusan, email, gambar) VALUES ('$nama', $nrp, '$jurusan', '$email', '$gambar')";

    mysqli_query($conn, $query_insert);

    return mysqli_affected_rows($conn);
}

// function delete
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
    $nrp = $data["nrp"]; //int
    $nama = $data["nama"]; //varchar
    $email = $data["email"]; //varchar
    $jurusan = $data["jurusan"]; //varchar
    $gambar = $data["gambar"]; //varhar
    $id = $data["id"]; //varhar

    mysqli_query($conn, "UPDATE mahasiswa SET nama = '$nama', nrp = $nrp,  jurusan = '$jurusan', email = '$email', gambar = '$gambar' WHERE id = $id");

    return mysqli_affected_rows($conn);

}
