<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$nik = $_GET['nik'];

	$result= mysqli_query($conn, "SELECT * FROM data_penduduk WHERE nik='$nik'");
	$data = mysqli_fetch_array($result);

	$result2= mysqli_query($conn, "SELECT * FROM data_kepala_keluarga WHERE nik='$nik'");
	$data2 = mysqli_fetch_array($result2);


	if ($data['nik'] == $nik && $data2['nik'] == $nik) {
		$delete = mysqli_query($conn, "DELETE FROM data_penduduk WHERE nik='$nik'");
		$delete2 = mysqli_query($conn, "DELETE FROM data_kepala_keluarga WHERE nik='$nik'");
		header("location: all_data.php?delete=success");
	}
	else{
		$delete = mysqli_query($conn, "DELETE FROM data_penduduk WHERE nik='$nik'");
		header("location: all_data.php?delete=success");
	}
	
?>