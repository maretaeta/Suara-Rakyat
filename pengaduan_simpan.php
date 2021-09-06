<?php
include"koneksi.php";
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi_laporan= $_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$status=0;
move_uploaded_file($file, "foto/".$foto);

$query="INSERT INTO tbl_pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) values 
	('$tgl' , '$nik' , '$isi_laporan' , '$foto', '$status')";


$perintah=mysqli_query($connect,$query) or die(mysql_error());

 if ($query) {
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="pengaduan_lihat.php";
	</script>
	<?php
}
?>
