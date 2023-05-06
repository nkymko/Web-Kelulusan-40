<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$data = "smkn4bojonegoro_kelulusan";
$conn = mysqli_connect($host, $user, $pass, $data);
mysqli_select_db($conn, $data);
