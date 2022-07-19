<?php
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

    require('koneksi.php');

    $nik = $_GET['nik'];
    $data_penduduk = mysqli_query($conn, "SELECT * FROM data_pendatang WHERE nik='$nik'");

    $data = mysqli_fetch_assoc($data_penduduk);

?>

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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="img/lambang3.png">

<!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav samping sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_admin.php">
                <div class="sidebar-brand-icon logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pendataan Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_admin.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="view_all_data_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Penduduk</span></a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username_akun']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detail Data Pendatang</h1>

                    <form autocomplete="off" required="" method="POST" action="">
                        <div class="card-body">
                            <br>
                            <div class="input_down">
                                <a href="all_data_pendatang_admin.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-angle-double-left"></i>
                                    </span>
                                    <span class="text"><b>Kembali</b></span>
                                </a>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputNik" class="input label">NIK</label>
                                <input type="text" class="conf" id="exampleInputNik" required="" name="nik" min="0" value="<?php echo $data['nik']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNik" class="input label">Nama</label>
                                <input type="text" class="conf" id="exampleInputNik" required="" name="nama" min="0" value="<?php echo $data['nama']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama" class="input label">Agama</label>
                                <input type="text" class="conf" id="exampleInputNama"  required="" name="agama" value="<?php echo $data['agama']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGender" class="input label">Gender</label>
                                <input type="text" class="conf" id="exampleInputGender"  required="" name="gender" 
                                value="<?php 
                                    if ($data['gender'] == "L") {
                                        echo "Laki - laki";
                                    }
                                    else if ($data['gender'] == "P") {
                                        echo "Perempuan";
                                    }
                                ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRt" class="input label">TTL</label>
                                <input type="date" class="conf" id="exampleInputRt" required="" name="ttl" min="0" value="<?php echo $data['ttl']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRt" class="input label">Dusun</label>
                                <input type="text" class="conf" id="exampleInputRt" required="" name="dusun" min="0" value="<?php echo $data['dusun']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRw" class="input label">Alamat</label>
                                <input type="text" class="conf" id="exampleInputRw" required="" name="alamat" min="0" value="<?php echo $data['alamat']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPendidikan" class="input label">Pendidikan</label>
                                <input type="text" class="conf" id="exampleInputPendidikan" required="" name="pendidikan" min="0" value="<?php echo $data['pendidikan']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPekerjaan" class="input label">Pekerjaan</label>
                                <input type="text" class="conf" id="exampleInputPekerjaan" required="" name="pekerjaan" min="0" value="<?php echo $data['pekerjaan']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGol" class="input label">Gol Darah</label>
                                <input type="text" class="conf" id="exampleInputGol" required="" name="gol_darah" min="0" value="<?php echo $data['gol_darah']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNo" class="input label">No Telp</label>
                                <input type="number" class="conf" id="exampleInputNo" required="" name="no_telp" min="0" value="<?php echo $data['no_telp']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAgama" class="input label">Status</label>
                                <input type="text" class="conf" id="exampleInputAkun" required="" name="status" min="0" value="<?php echo $data['status']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTtlMulai" class="input label">Ttl Mulai</label>
                                <input type="text" class="conf" id="exampleInputAkun" required="" name="ttl_mulai" min="0" value="<?php echo $data['ttl_mulai']; ?>" readonly>
                                <hr class="sidebar-divider my-0 garis">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>

                </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar dari halaman ini</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout untuk keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="action_logout.php">Logout</a>
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

</body>

</html>