<?php
	include("config.php");
	$idpd=$_POST['id_pd'];
	$nm_pd=$_POST['nama'];
	$fakultas=$_POST['fakultas'];
	$jenjang=$_POST['jenjang'];

	if(isset($_POST['kirim'])){
		$query=mysqli_query($connect,"insert into prodi values('$idpd','$nm_pd','$fakultas','$jenjang')");
		if($query){
			header('location:../view_prodi.php?insert=sukses');
		}
	}
?>