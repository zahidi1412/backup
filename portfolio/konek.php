<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect('localhost','dzahiweb_phis','MyNameIs1412')or die("faile server");
 
// isikan dengan nama database yang akan di hubungkan

$db = mysqli_select_db($host,'dzahiweb_dza') or die("faiil db");
 
?>