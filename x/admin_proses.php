<?php
include"koneksi.php";
$status='proses';
$sql=mysqli_query($connect, "UPDATE tbl_pengaduan SET status='proses' WHERE nik='$_GET[nik]'")or die(mysqli_error($connect));
$cek = mysqli_num_rows($sql);
if ($cek < 0) {
	$_SESSION['nik'] = $nik;
	$_SESSION['status'] = "proses";
	header('location:admin_verifikasi.php');
}
else{
	header("location:admin_verifikasi.php?pesan=gagal");
}
?>
