<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> APLIKASI PELAPORAN PENGADUAN MASYARAKAT </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient" style="background-image: url('img/bg1.jpg');" >

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-10 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-8 d-none d-lg-block"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-5">WELCOME ADMIN!</h1>
                  </div>
                  <form class="user" method="post" action="admin_cek_login.php">
                    <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
                  <font color="red"> *admin</font>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    <font color="red"> *123 </font>
                  </div>
                   <button type="submit"> LOGIN </button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
     <?php
          

          if (isset($submit)) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $login = $_POST['login'];
            if ($user == "" || $pass == "") {
            } 
            else{
            $sql = mysql_query($connect,"SELECT * FROM tbl_admin where username='$user' and pass='$pass'");
            $data = mysql_fetch_array($sql);
            $cek = mysql_num_rows($sql);

            if ($cek >= 1) {
                $_SESSION['admin'] = $data ['id_user'];
                $_SESSION['level'] = "login";
                header("location :admin.php");
              }
              else {
                echo "Login Gagal";
              }
            }
          }
        
        ?>

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
