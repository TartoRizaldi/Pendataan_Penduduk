<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$nik = $_GET['nik'];

	$result= mysqli_query($conn, "DELETE FROM data_penduduk_pindah WHERE nik='$nik'");
	$data = mysqli_fetch_array($result);

	header("location: all_data_pin_admin.php?delete=success");

	
?>