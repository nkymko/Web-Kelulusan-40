<?php

if (isset($_GET['id'])) {
    include '../inc/config.php';
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "delete from data_kelulusan where id='$id'") or die(mysqli_error($conn));
    if ($sql) {
        echo "<script>alert('Data Berhasil Dihapus');location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');location.href='index.php';</script>";
    }
}
