<?php
include"koneksi.php";

$nik= $_POST['nik'];
$nama= $_POST['nama'];
$user= $_POST['username'];
$pass= $_POST['password'];
$telp= $_POST['telp'];

$sql="INSERT INTO tbl_masyarakat (nik,nama,username,password,telp) values ('$nik','$nama','$user','$pass','$telp')";
$perintah=mysqli_query($connect,$sql) or die(mysql_error());

 if ($sql) {
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="login.php";
	</script>
	<?php
}
?>
