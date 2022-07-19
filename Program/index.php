<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendataan Penduduk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="img/lambang3.png">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        .para {
            text-indent: 45px;
            text-align: justify;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav samping sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pendataan Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="datas_user.php">
                    <i class="fas fa-fw fa-clone"></i>
                    <span>Semua Data</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="all_data_user.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Data Penduduk</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="all_data_pendatang_user.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Data Pendatang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="all_data_kep_user.php">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Kepala Keluarga</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="all_data_pin_user.php">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Penduduk Pindah</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="pencarian.php" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari berdasarkan NIK . . . ." aria-label="Search" aria-describedby="basic-addon2" name="inputnik" required="">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#logoutModal">
                                <i class="fas fa-power-off fa-fw"></i>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="space_d">
                        <div class="alert alert-danger alert-dismissible div1">
                            <marquee>Ayo teman-teman segera lengkapi data-datamu</marquee>
                        </div>
                    </div>




                    <div class="space_d">
                        <div class="div1">
                            <table class="tabel2" border="0">
                                <tr>
                                    <td class="a3">
                                        <div>
                                            <center>
                                                <img src="img/profil.png" alt="Nature" class="responsivee" />
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="a3">
                                        <div>
                                            <center>
                                                <div class="alert alert-dark alert-dismissible div1">
                                                    <p class="para">
                                                        Desa Tanampedagi adalah salah satu Desa dari sembilan belas Desa yang
                                                        ada di wilayah Kecamatan Ampibabo, Kabupaten Parigi Moutong, Kota Palu,
                                                        Provinsi Sulawesi Tengah. Sebelum
                                                        dimekarkan Desa ini Merupakan Bagian Dari Wilayah Desa yang berbeda yaitu
                                                        Desa Sidole dan Desa Tolole., Sesuai dengan Kebutuhan Masyarakat Tentang
                                                        Pendekatan Pelayanan Pemerintah Desa Maka Maka Timbullah Keinginan
                                                        Masyarakat Untuk Menyatukan Wilayah tersebut Menjadi Sebuah Desa.
                                                    </p>
                                                </div>
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3 flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Visi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <p class="para">
                                                            “Menjadikan Desa Tanampedagi Sebagai Desa Unggulan di Semua
                                                            Sector Pembangunan sesuai Potensi yang dimiliki, menuju masyarakat yang
                                                            mandiri, sejahtera ,dan aman, maju serta berwibawa dikecamatan ampibabo”.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3  flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Misi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <ul>
                                                            <li style="text-align: justify;">
                                                                Memberikan Pelayanan Secara Baik dan Terbuka kepada masyarakat.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Melaksanakan Pemerintahan yang bersih dan berwibawa bebas dari KKN.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan Kualitas Sumber daya Manusia yang bermoral, dalam upaya
                                                                pengembangan pemberdayaan masyarakat untuk pemenuhan kebutuhan
                                                                disemua sektor Pembangunan sesuai dengan daya alam yang di miliki.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Menyelesaikan Persoalan Secara Resmi damai dan adil,dengan tindak
                                                                melihat unsur kepentingan pribadi keluarga.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan derajat kesehatan masyarakat.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan kinerja aparatur Desa dalam menyelangarakan birokrasi
                                                                pemerintah,pembangunan,dan kemasuarakatan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan dan mengembangkan nilai-nilai agama dan budaya sebagai
                                                                asset pembangunan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan keamanan dan ketertiban.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Mendukung dan mensukseskan setiap kegiatan kepemudaan dibidang
                                                                olahraga serta kegiatan yang bersifat positif.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Mendorong Masyarakat untuk berpartisipasi dalam semua program
                                                                pembangunan desa.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>



                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Kantor Desa Tanampedagi</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title kelas_login" id="exampleModalLabel">
                            Login
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" action="action_login.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" name="submit">Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>