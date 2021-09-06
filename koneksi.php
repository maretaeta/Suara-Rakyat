<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = '21_db_ukkrpl2020';
$connect = mysqli_connect($host,$user,$pass) or die (mysql_error());
mysqli_select_db($connect,$db_name) or die ('no database');
$tanggal = date("d/m/Y");
?>