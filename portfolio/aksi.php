<?php 
include 'konek.php';
$name = $_POST['name'];
$pass = $_POST['pass'];
$komen = $_POST['komen'];
$sql = "INSERT INTO tabel VALUES('".$name."','".$pass."','".$komen."')";
 
$query = mysqli_query($host,$sql);
 
if(!$query)
header("location:index.php?pesan=fail");
else           
header("location:index.php?pesan=input");

?>