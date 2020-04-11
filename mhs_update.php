<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$nrp = $_POST['nrp'];
		$nama = $_POST['nama'];
		$jumlah_sks = $_POST['jumlah_sks'];
		
		require_once('koneksi.php');
		
		$sql = "UPDATE mmahasiswa SET nama = '$nama', jumlah_sks = '$jumlah_sks' WHERE nrp = $nrp;";
		
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Mahasiswa';
		}else{
			echo 'Gagal Update Data Mahasiswa';
		}
		
		mysqli_close($con);
	}
?>