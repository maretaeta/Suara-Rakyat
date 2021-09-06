<?php
include"koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connect, "SELECT * FROM tbl_login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");

}
else{
	?>
	<script type="text/javascript">
		alert ('Username dan password salah!');
		window.location="login.php?pesan=gagal";
	</script>
	<?php
}
?>



