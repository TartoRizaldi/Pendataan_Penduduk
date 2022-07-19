<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$nik = $_GET['nik'];

	$result = mysqli_query($conn, "DELETE FROM data_pendatang WHERE nik='$nik'");

	header("location: all_data_pendatang_super.php?delete=success");

?>