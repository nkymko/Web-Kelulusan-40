<?php
$host = "localhost"; 
$user = "root";  
$pass = ""; 
$dbname = "smkn40jakarta_kelulusan"; 
$conn = mysqli_connect($host, $user, $pass, $dbname);
mysqli_select_db($conn, $dbname);
