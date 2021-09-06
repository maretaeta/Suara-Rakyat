<?php
session_start()

include"koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$login = mysql_query($koneksi,"select * from tbl_user where username='$username' and password='$password'");
$cek= mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqlu_fetch_assoc($login);
	if ($data['level']=="admin") {
		$_SESSION['username']=$username;
		$_SESSION['level']="admin";
		header("location:.php");
		}
	elseif ($data['level']=="masyarakat") {
		$_SESSION['username']=$username;
		$_SESSION['level']="masyarakat";
		header("location:utama.php");
	}
	else{
		header("location:index.php?pesan=gagal");
	}
}

?>