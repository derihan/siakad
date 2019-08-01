<?php
include"config.php";
$nim = $_GET['nim'];
if (isset($_GET['hapus'])) {
	$query=mysqli_query($connect,"delete from mahasiswa where NIM='$nim'");
	$query2=mysqli_query($connect,"delete from yuser where username='$nim'");
	header("location:../view_mahasiswa.php?hapus=sukses");
}
?>