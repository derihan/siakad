<?php
include("config.php");
$id_mk=$_POST['id_mk'];
$nama_mk=$_POST['nama_mk'];
$sks =$_POST['sks'];
$nidn=$_POST['nidn'];

if(isset($_POST['kirim'])){
	$query=mysqli_query($connect,"insert into matkul values('$id_mk','$nama_mk','$sks','$nidn')");
	if($query){
		header('location:../view_makul.php?insert=sukses');
	}
}
?>