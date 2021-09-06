<?php
include"koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APLIKASI PELAPORAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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

          <!--  -->
           <div class="sidebar-brand-icon rotate-n-15">
          <i> <img src="img/logoo.png"; style="margin-left: 18px;"> </i>
        </div>
        <div class="sidebar-brand-text mx-3">SUARA RAKYAT </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          

              
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                  Logout
                </a>  
              </a>
            </li>       
        </nav>
      </ul>
    </nav>
        <!-- End of Topbar -->


         <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow">
            <div class="card-header"> Detail Pengaduan </div>
            <div class="card-body">
              <form method="post" role="form" enctype="multipart/form-data">
                <?php
                  include"koneksi.php";
                  $id_pengaduan=$_GET['id_pengaduan'];

                  $query=" SELECT * FROM tbl_pengaduan where id_pengaduan='$id_pengaduan' ";
                  $perintah=mysqli_query($connect,$query);
                  $tampil=mysqli_fetch_array($perintah);

                  ?>

                <div class="form-group cols-sm-6">
                  <label>Tanggal Pengaduan </label>
                  <input type="text" name="tgl_pengaduan" class="form-control" 
                  value="<?php echo "$tampil[tgl_pengaduan]"?>" >
                </div>
                 <div class="form-group cols-sm-6">
                  <label>NIK </label>
                  <input type="text" name="nik" class="form-control" value="<?php echo "$tampil[nik]"?> ">
                </div>
                <div class="form-group cols-sm-6">
                  <label>Isi Laporan</label>
                  <input name="isi_laporan" class="form-control" rows="7" 
                  value="<?php echo "$tampil[isi_laporan]"?>"> 
                 </div>
                  <div class="form-group cols-sm-6">
                  <label> Bukti Foto </label>
                  <img src="<?php echo "$tampil[foto]"?>">
                </div> 
              </form>
            </div>
          </div>
          <br> <br>
        <div>
           <a href="pengaduan_lihat.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text"> KEMBALI </span> </a>
        </div>



      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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