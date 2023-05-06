<?php
  function simpansiswa(){
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$guru=$_POST['nama_guru'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO siswa(id,nis,nama,kelas,jurusan,nama_guru)
	VALUES('','$nis','$nama','$kelas','$jurusan','$guru')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='../siswa/datasiswa.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../siswa/datasiswa.php'</script>";
		}
	}
	function updatesiswa(){
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$guru=$_POST['nama_guru'];
	require("config.php");
	$update=mysqli_query($conn,"UPDATE siswa SET nis='$nis',nama='$nama',kelas='$kelas',jurusan='$jurusan',nama_guru='$guru'
	WHERE nis='$nis'");
		if ($update){
   		echo "<script>alert ('Data Berhasil Diupdate');document.location='../siswa/datasiswa.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate', Coba Lagi);document.location='../siswa/updatesiswa.php'</script>";
		}
	}
	function deletesiswa(){
		$nis=$_REQUEST['nis'];
        require ("config.php");
        $delete=mysqli_query($conn,"DELETE FROM siswa WHERE nis='$nis'");
        if($delete){
	      echo "<script>alert ('Data Berhasil Dihapus');document.location='../siswa/datasiswa.php'</script>";
        }else{
	    echo "<script>alert ('Data Gagal Dihapus');document.location='../siswa/datasiswa.php'</script>";
     }
	}
	function simpanabsensi(){
	$nis=$_POST['nis'];
	$tahun_ajaran=$_POST['tahun'];
	$tgl_absen=$_POST['tgl'];
	$keterangan=$_POST['keterangan'];
	require("config.php");
	//coding Validasi
    $sql2=mysqli_query($conn,"SELECT * FROM absensi WHERE nis='$nis'");
    $data2=mysqli_fetch_array($sql);
    if($nis==$data2['nis']){
    $update2=mysqli_query($conn,"UPDATE absensi SET nis='$nis',tahun_ajaran='$tahun_ajaran' WHERE nis='$nis'");
	$save1=mysqli_query($conn,"INSERT INTO detail_absensi(id_detail_absensi,nis,tanggal_absen,keterangan)
	VALUES('','$nis','$tgl_absen','$keterangan')");
		if ($update2 && $save1){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='../absensi/absensisiswa.php?aksi=simpan'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../absensi/absensisiswa.php?aksi=simpan'</script>";
		} 	
    }else{
	$save2=mysqli_query($conn,"INSERT INTO absensi(id_absensi,nis,tahun_ajaran)
	VALUES('','$nis','$tahun_ajaran')");
	$save3=mysqli_query($conn,"INSERT INTO detail_absensi(id_detail_absensi,nis,tanggal_absen,keterangan)
	VALUES('','$nis','$tgl_absen','$keterangan')");
		if ($save2 && $save3){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='../absensi/absensisiswa.php?aksi=simpan'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../absensi/absensisiswa.php?aksi=simpan'</script>";
		} 
	}
}
function simpankoreksiabsensi(){
	$nis=$_POST['nis'];
	$tahun_ajaran=$_POST['tahun'];
	$tgl_absen=$_POST['tgl'];
	$keterangan=$_POST['keterangan'];
	require("config.php");
	//coding Validasi
    $sql4=mysqli_query($conn,"SELECT * FROM absensi WHERE nis='$nis'");
    $data4=mysqli_fetch_array($sql4);
    if($nis==$data4['nis']){
    $update4=mysqli_query($conn,"UPDATE absensi SET nis='$nis',tahun_ajaran='$tahun_ajaran' WHERE nis='$nis'");
	$save4=mysqli_query($conn,"INSERT INTO detail_absensi(id_detail_absensi,nis,tanggal_absen,keterangan)
	VALUES('','$nis','$tgl_absen','$keterangan')");
		if ($update4 && $save4){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_koreksi_absensi.php?aksi=simpan'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_koreksi_absensi.php?aksi=simpan'</script>";
		} 	
    }else{
	$save5=mysqli_query($conn,"INSERT INTO absensi(id_absensi,nis,tahun_ajaran)
	VALUES('','$nis','$tahun_ajaran')");
	$save6=mysqli_query($conn,"INSERT INTO detail_absensi(id_detail_absensi,nis,tanggal_absen,keterangan)
	VALUES('','$nis','$tgl_absen','$keterangan')");
		if ($save5 && $save6){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_koreksi_absensi.php?aksi=simpan'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_koreksi_absensi.php?aksi=simpan'</script>";
		} 
	}
}	
 function simpanguru(){
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$jabatan=$_POST['jabatan'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO guru(id_guru,nip,nama_guru,jabatan)
	VALUES('','$nip','$nama','$jabatan')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_guru.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_guru.php?aksi=kedua'</script>";
		}
	}
	function updateguru(){
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$jabatan=$_POST['jabatan'];

	
	require("config.php");
	$update=mysqli_query($conn,"UPDATE guru SET nip='$nip',nama_guru='$nama',jabatan='$jabatan'
	WHERE nip='$nip'");
		if ($update){
   		echo "<script>alert ('Data Berhasil Diupdate');document.location='template_guru.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate', Coba Lagi);document.location='template_guru.php?aksi=kedua'</script>";
		}
	}
	function deleteguru(){
		$nip=$_REQUEST['nip'];
        require ("config.php");
        $delete=mysqli_query($conn,"DELETE FROM guru WHERE nip='$nip'");
        if($delete){
	      echo "<script>alert ('Data Berhasil Dihapus');document.location='template_guru.php?aksi=kedua'</script>";
        }else{
	    echo "<script>alert ('Data Gagal Dihapus');document.location='template_guru.php?aksi=kedua'</script>";
     }
	}
	 function simpantatausaha(){
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO tata_usaha(id_tatausaha,nip,nama_tatausaha)
	VALUES('','$nip','$nama')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_tatausaha.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_tatausaha.php?aksi=kedua'</script>";
		}
	}
	function updatetatausaha(){
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];

	
	require("config.php");
	$update=mysqli_query($conn,"UPDATE tata_usaha SET nip='$nip',nama_tatausaha='$nama'
	WHERE nip='$nip'");
		if ($update){
   		echo "<script>alert ('Data Berhasil Diupdate');document.location='template_tatausaha.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate', Coba Lagi);document.location='template_tatausaha.php?aksi=kedua'</script>";
		}
	}
	function deletetatausaha(){
		$nip=$_REQUEST['nip'];
        require ("config.php");
        $delete=mysqli_query($conn,"DELETE FROM tata_usaha WHERE nip='$nip'");
        if($delete){
	      echo "<script>alert ('Data Berhasil Dihapus');document.location='template_tatausaha.php?aksi=kedua'</script>";
        }else{
	    echo "<script>alert ('Data Gagal Dihapus');document.location='template_tatausaha.php?aksi=kedua'</script>";
     }
	}


	function simpankelas(){
	$nama=$_POST['nama'];
	$komli=$_POST['komli'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian)
	VALUES('','$nama','$komli')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_kelas.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_kelas.php?aksi=kedua'</script>";
		}
	}

	function updatekelas(){
	$nama=$_POST['nama'];
	$komli=$_POST['komli'];
	$no=$_POST['id_kelas'];

	require("config.php");
	$update=mysqli_query($conn,"UPDATE kelas SET nama_kelas='$nama',kompetensi_keahlian='$komli'
	WHERE id_kelas='$no'");
		if ($update){
   		echo "<script>alert ('Data Berhasil Diupdate');document.location='template_kelas.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate', Coba Lagi);document.location='template_kelas.php?aksi=kedua'</script>";
		}
	}

	function deletekelas(){
		$no=$_REQUEST['no'];
        require ("config.php");
        $delete=mysqli_query($conn,"DELETE FROM kelas WHERE id_kelas='$no'");
        if($delete){
	      echo "<script>alert ('Data Berhasil Dihapus');document.location='template_kelas.php?aksi=kedua'</script>";
        }else{
	    echo "<script>alert ('Data Gagal Dihapus');document.location='template_kelas.php?aksi=kedua'</script>";
     }
	}



	function simpanspp(){
	$tahun=$_POST['tahun'];
	$spp=$_POST['spp'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$gedung=$_POST['gedung'];
	$ki=$_POST['ki'];
	$pkl=$_POST['pkl'];
	$awaltahun=$_POST['awaltahun'];
	$akhirtahun=$_POST['akhirtahun'];
	$iuranlain=$_POST['iuranlain'];
	$total=($spp+$gedung+$ki+$pkl+$awaltahun+$akhirtahun+$iuranlain);
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO spp(id_spp,tahun,spp,kelas,jurusan,uang_gedung,kunjungan_industri,pkl,iuran_awal_tahun,iuran_akhir_tahun,iuran_lainnya,total)
	VALUES('','$tahun','$spp','$kelas','$jurusan','$gedung','$ki','$pkl','$awaltahun','$akhirtahun','$iuranlain','$total')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_spp_utama.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_spp_utama.php?aksi=kedua'</script>";
		}
	}

	function updatespp(){
	$no=$_POST['id_spp'];
	$tahun=$_POST['tahun'];
	$spp=$_POST['spp'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$gedung=$_POST['gedung'];
	$ki=$_POST['ki'];
	$pkl=$_POST['pkl'];
	$awaltahun=$_POST['awaltahun'];
	$akhirtahun=$_POST['akhirtahun'];
	$iuranlain=$_POST['iuranlain'];
	$total=($spp+$gedung+$ki+$pkl+$awaltahun+$akhirtahun+$iuranlain);
	require("config.php");
	$update=mysqli_query($conn,"UPDATE spp SET id_spp='$no',tahun='$tahun',spp='$spp',kelas='$kelas',jurusan='$jurusan',uang_gedung='$gedung',kunjungan_industri='$ki',pkl='$pkl',iuran_awal_tahun='$awaltahun',iuran_akhir_tahun='$akhirtahun',iuran_lainnya='$iuranlain',total='$total'
	WHERE id_spp='$no'");
		if ($update){
   		echo "<script>alert ('Data Berhasil Diupdate');document.location='template_spp_utama.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate', Coba Lagi);document.location='template_spp_utama.php?aksi=kedua'</script>";
		}
	}

	function deletespp(){
		$no=$_REQUEST['id_spp'];
        require ("config.php");
        $delete=mysqli_query($conn,"DELETE FROM spp WHERE id_spp='$no'");
        if($delete){
	      echo "<script>alert ('Data Berhasil Dihapus');document.location='template_spp_utama.php?aksi=kedua'</script>";
        }else{
	    echo "<script>alert ('Data Gagal Dihapus');document.location='template_spp_utama.php?aksi=kedua'</script>";
     }
	}

function simpanpembayaran(){
	$nis=$_POST['nis'];
	$id_tatausaha=$_POST['idtatausaha'];
	$id_spp=$_POST['id_spp'];
	$kelas=$_POST['kelas'];
	$tgl=$_POST['tgl'];
	$bulan=$_POST['bulan'];
	$tahun=$_POST['tahun'];
	$jumlah=$_POST['jumlah'];
	$total=$_POST['total'];
	
	
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO pembayaran(id_pembayaran,id_tatausaha,id_spp,nis,kelas,tgl_bayar,bulan_bayar,tahun_bayar,jumlah_bayar)
	VALUES('','$id_tatausaha','$id_spp','$nis','$kelas','$tgl','$bulan','$tahun','$jumlah')");
		if ($save){
   		echo "<script>alert ('Data Berhasil Disimpan');document.location='template_pembayaran.php?aksi=kedua'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='template_pembayaran.php?aksi=kedua'</script>";
		}
	}

?>