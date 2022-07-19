<?php
    require('koneksi.php');

    $nik = $_GET['nik'];

    $data1 = mysqli_query($conn, "SELECT * FROM data_penduduk WHERE nik='$nik'");
    $cetak1 = mysqli_fetch_assoc($data1);
    ?>
    <head>
    <title>Pendataan Penduduk</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom logo -->
    <link rel="icon" href="img/lambang3.png">
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
            margin-top: 1%;
        }

        #judul2{
            text-align:center;
            margin-top: -3%;
        }

        #halaman{
            width: 90%; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
        .logosurat{
            width: 70%;
        }
        .kop1{
            width: 15%;
        }
        .kop2{
            width: 85%;
            font-size: 120%;
            padding-top: 2%;
        }
        .tb_cetak{
            border: 2px solid black;
            border-top-width: 0;
            border-left-width: 0;
            border-right-width: 0;
        }
        .bold{
            font-size: 120%;
        }
        .para{
            text-indent: 45px;
            text-align: justify;
        }

    </style>

    </head>

    <body>
        <div id=halaman>
            <table class="tb_cetak" border="0" width="100%" height="140px">
                <tr>
                    <td class="kop1">
                    <center>
                        <img class="logosurat" src="img/lambang3.png">
                    </center>
                    </td>
                    <td class="kop2">
                    <center>
                    <b class="bold"> PEMERINTAH KABUPATEN PARIGI MOUTONG<br>
                        KECAMATAN  AMPIBABO<br>
                        DESA TANAMPEDAGI<br></b>
                        Alamat : Jl Tadulako Nomor ….. Desa Tanampedagi Kode Pos 94474<br>
                    </center>
                    </td>
                </tr>
            </table>
            <h3 id=judul><u>SURAT KETERANGAN PINDAH DOMISILI</u></h3>
            <p id=judul2>Nomor : 145 /……/PEMDES-TPDG/…../2022</p>
            <br>

            <p  class="para">Yang bertanda tangan di bawah ini, menerangkan Pemohon Pindah penduduk WNI dengan data sebagai berikut :</p>

            <table>
                <tr>
                    <td style="width: 61.5%;">Nama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['nama']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Tempat/Tanggal Lahir</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['ttl']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%; vertical-align: top;">Jenis Kelamin</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;">
                    <?php 
                        if ($cetak1['gender'] == "L") {
                            echo "Laki-laki";
                        }
                        else if ($cetak1['gender'] == "P") {
                            echo "Perempuan";
                        }
                         ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 55%;">NIK</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['nik']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%; vertical-align: top;">Agama</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['agama']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Status</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['status']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Pekerjaan</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Alamat</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['alamat']; ?></td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <p  class="para">Adapun Permohonan Pindah Penduduk  WNI dari <?php echo $cetak1['dusun']; ?> yang bersangkutan sebagaimana terlampir.</p>

            <p  class="para">Demikian surat pengantan pindah ini di  buat, dan akan digunakan sebagaimana mestinya.</p>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div style="width: 42%; text-align: left; float: right;">Tanampedagi, ........,........,..........</div><br>
            <div style="width: 40%; text-align: left; float: right;">Kepala Desa Tanampedagi</div><br><br><br><br><br>
            <br>
            <div style="width: 39%; text-align: left; float: right;"><b>ISHAK ALISINCAU</b></div>

        </div>
        <!-- Coding Print -->
        <script>
            window.print();
        </script>
    </body>