<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $ttl = $_POST['ttl'];
            $dusun = $_POST['dusun'];
            $gender = $_POST['gender'];
            $alamat = $_POST['alamat'];
            $pendidikan = $_POST['pendidikan'];
            $pekerjaan = $_POST['pekerjaan'];
            $status = $_POST['status'];
            $kategori = "Pendatang";
            $gol_darah = $_POST['gol_darah'];
            $no_telp = $_POST['no_telp'];
            $tm = $_POST['ttl_mulai'];
            $username = $_POST['username'];

            $result= mysqli_query($conn, "SELECT id_akun FROM akun WHERE username_akun='$username'");
            $data = mysqli_fetch_array($result);

            $ha = $data['id_akun'];

            if ($agama == "") {
                header("location: all_data_pendatang_super.php?input=error");
            }

            else if ($gender == "") {
                header("location: all_data_pendatang_super.php?input=error");
            }

            else if ($gol_darah == "") {
                header("location: all_data_pendatang_super.php?input=error");
            }
            else if ($status == "") {
                header("location: all_data_pendatang_super.php?input=error");
            }

            else {
                $simpanData = mysqli_query($conn, "INSERT INTO data_pendatang VALUES ('$nik','$nama','$agama','$gender','$ttl','$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$tm','$ha')");
                header("location: all_data_pendatang_super.php?input=success");
            }
    }
?>