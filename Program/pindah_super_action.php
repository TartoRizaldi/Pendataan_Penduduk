<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

    $user = $_SESSION['username_akun'];
	$nik = $_GET['nik'];

    $result= mysqli_query($conn, "SELECT * FROM data_penduduk WHERE nik='$nik'");
    $data = mysqli_fetch_array($result);

    $result2= mysqli_query($conn, "SELECT id_akun FROM akun WHERE username_akun='$user'");
    $data2 = mysqli_fetch_array($result2);
    $ha = $data2['id_akun'];

    $result3= mysqli_query($conn, "SELECT * FROM data_penduduk_pindah WHERE nik='$nik'");
    $data3 = mysqli_fetch_array($result3);

    $result4= mysqli_query($conn, "SELECT * FROM data_kepala_keluarga WHERE nik='$nik'");
    $data4 = mysqli_fetch_array($result4);

    $nik = $data['nik'];
    $nama = $data['nama'];
    $agama = $data['agama'];
    $gender = $data['gender'];
    $ttl = $data['ttl'];
    $dusun = $data['dusun'];
    $alamat = $data['alamat'];
    $pendidikan = $data['pendidikan'];
    $pekerjaan = $data['pekerjaan'];
    $gol_darah = $data['gol_darah'];
    $no_telp = $data['no_telp'];
    $status = $data['status'];
    $kategori = $data['kategori'];

    if ($data['nik'] == $data4['nik']) {
        $query2 = mysqli_query($conn, "INSERT INTO data_penduduk_pindah VALUES ('$nik','$nama','$agama','$gender','$ttl','$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$ha')");
        $query3 = mysqli_query($conn, "DELETE FROM data_penduduk WHERE nik = $nik");
        $query4 = mysqli_query($conn, "DELETE FROM data_kepala_keluarga WHERE nik = $nik");
        header("location: all_data.php?pindah=success");
    }

    else {
        $query2 = mysqli_query($conn, "INSERT INTO data_penduduk_pindah VALUES ('$nik','$nama','$agama','$gender','$ttl','$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$ha')");
        $query3 = mysqli_query($conn, "DELETE FROM data_penduduk WHERE nik = $nik");
        header("location: all_data.php?pindah=success");
    }
?>