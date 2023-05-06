<?php
$host = "127.0.0.1"; // rubah ini sesuai dengan host anda
$user = "root";  // rubah ini sesuai dengan username anda
$pass = "";  // rubah ini sesuai dengan password anda
$data = "smkn4bojonegoro_kelulusan"; // rubah ini sesuai dengan nama database anda
$conn = mysqli_connect($host, $user, $pass, $data);
mysqli_select_db($conn, $data);
