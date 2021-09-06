<?php
if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) {
		case 'form_pengaduan';
			include 'form_pengaduan.php';
			break;
		
		case 'lihat_laporan';
			include 'lihat_laporan.php';
			break;
			
	}
}
else{
	?>
	Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama'];
}
?>