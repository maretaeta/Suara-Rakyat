<?php
include"koneksi.php";

$id_petugas= $_POST['id_petugas'];
$nama_petugas= $_POST['nama_petugas'];
$user= $_POST['username'];
$pass= $_POST['password'];
$telp= $_POST['telp'];

$sql="INSERT INTO tbl_petugas (id_petugas,nama_petugas,username,password,telp) values ('$id_petugas','$nama_petugas','$user','$pass','$telp')";
$perintah=mysqli_query($connect,$sql) or die(mysql_error());

 if ($sql) {
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="admin_login.php";
	</script>
	<?php
}
?>
