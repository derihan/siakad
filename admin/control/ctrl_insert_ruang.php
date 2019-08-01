<?php
	include("config.php");
	$id=$_POST['id_r'];
	$gdg=$_POST['gdg'];
	$lantai=$_POST['lantai'];
	$no=$_POST['no'];

	if(isset($_POST['kirim'])){
		$query=mysqli_query($connect,"insert into ruangan values('$id','$gdg','$lantai','$no')");
		if($query){
			header('location:../view_ruangan.php?insert=sukses');
		}
	}
?>