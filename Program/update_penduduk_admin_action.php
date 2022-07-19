<?php
    require 'koneksi.php';
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $gender = $_POST['gender'];
            $ttl = $_POST['ttl'];
            $dusun = $_POST['dusun'];
            $alamat = $_POST['alamat'];
            $pendidikan = $_POST['pendidikan'];
            $pekerjaan = $_POST['pekerjaan'];
            $gol_darah = $_POST['gol_darah'];
            $no_telp = $_POST['no_telp'];
            $status = $_POST['status'];

            $user = $_SESSION['username_akun'];

            $result= mysqli_query($conn, "SELECT id_akun FROM akun WHERE username_akun='$user'");
            $data = mysqli_fetch_array($result);

            $result2= mysqli_query($conn, "SELECT * FROM data_kepala_keluarga");
            $data2 = mysqli_fetch_array($result2);

            $ha = $data['id_akun'];


            if ($gender == "L" && $status == "Menikah") {
                if ($nik == $data2['nik']) {
                    $simpanData = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");

                    $simpanData3 = mysqli_query($conn, "UPDATE data_kepala_keluarga SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");
                    header("location: all_data_admin.php?update=success");
                } else {
                    $simpanData2 = mysqli_query($conn, "INSERT INTO data_kepala_keluarga VALUES ('$nik','$nama','$agama','$gender','$ttl','$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$ha')");

                    $simpanData = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");
                    header("location: all_data_admin.php?update=success");
                }
                
            }

            else if ($gender == "L" && $status == "Belum Menikah") {
                $delete = mysqli_query($conn, "DELETE FROM data_kepala_keluarga WHERE nik='$nik'");

                $simpanData = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");
                    header("location: all_data_admin.php?update=success");
            }

            else if ($gender == "P" && $status == "Menikah") {
                $delete10 = mysqli_query($conn, "DELETE FROM data_kepala_keluarga WHERE nik='$nik'");

                $simpanData10 = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");
                    header("location: all_data_admin.php?update=success");
            }

            else if ($gender == "P" && $status == "Belum Menikah") {
                $delete11 = mysqli_query($conn, "DELETE FROM data_kepala_keluarga WHERE nik='$nik'");

                $simpanData11 = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', id_akun='$ha' WHERE nik='$nik'");
                    header("location: all_data_admin.php?update=success");
            }
    }   
?>