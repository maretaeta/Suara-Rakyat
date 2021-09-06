<?php
include"koneksi.php";

$tgl=date('Y/m/d');
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$status="selesai";


$sql="INSERT INTO tbl_tanggapan (tgl_tanggapan,tanggapan,id_petugas) values 
	('$tgl', '$tanggapan' , '$id_petugas')";
$perintah=mysqli_query($connect,$sql) or die(mysql_error());

if ($sql) {
	?>
	<script type="text/javascript">
		alert('Data Sudah Ditanggapai');
		window.location="admin_verifikasi.php";
	</script>
	<?php
}
?>