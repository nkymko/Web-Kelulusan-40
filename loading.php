<?php
include 'inc/config.php'; //untuk memanggil Config
$nisn = $_POST['nisn']; // memanggil name dari login yang di inputkan
$sql = mysqli_query($conn, "select * from data_kelulusan where nisn ='$nisn' "); // memanggil table user di database sekolah dengan menampilkan nama dan password
$hasil = mysqli_num_rows($sql);
if ($hasil > 0) {

	session_start();
	while ($row = mysqli_fetch_assoc($sql)) {
		$_SESSION['nisn'] = $row['nisn'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['jurusan'] = $row['jurusan'];
		$_SESSION['status_lulus'] = $row['status_lulus'];
	}

	header("location:umum.php");
} {
	die("<script>alert('NISN Tidak ditemukan');location.href='index.php';</script>");
}
