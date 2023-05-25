<?php

include '../inc/config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($conn, "select * from users where username ='$username' and password ='$password' "); // memanggil table user di database sekolah dengan menampilkan nama dan password

$hasil = mysqli_num_rows($sql);
if ($hasil > 0) {
    session_start();
    $row = mysqli_fetch_assoc($sql);

    $_SESSION['admin'] = [
        'nama' => $row['name'],
        'username' => $row['username']
    ];

    header("location:index.php");
}
