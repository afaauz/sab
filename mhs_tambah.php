<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$nrp 		= $_POST['nrp'];
		$nama 		= $_POST['nama'];
		$jumlah_sks = $_POST['jumlah_sks'];
		
		$sql = "INSERT INTO tb_pegawai (nrp,nama,jumlah_sks) VALUES ('$nrp','$nama','$jumlah_sks')";
		
		require_once('koneksi.php');
		
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Mahasiswa';
		}else{
			echo 'Gagal Menambahkan Mahasiswa';
		}
		
		mysqli_close($con);
	}
?>