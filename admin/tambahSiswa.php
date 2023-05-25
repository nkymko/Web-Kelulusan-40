<?php

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$status_lulus = $_POST['status_lulus'] == 'Lulus' ? 1 : 0;


include '../inc/config.php';
$sql = mysqli_query($conn, "insert into data_kelulusan values(null,'$nama','$nisn','$jurusan','$status_lulus')");

if ($sql) {
    echo "<script>alert('Data Berhasil Ditambahkan');location.href='index.php';</script>";
} else {
    echo "<script>alert('Data Gagal Ditambahkan');location.href='index.php';</script>";
}
