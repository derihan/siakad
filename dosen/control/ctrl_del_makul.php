<?php
    include"config.php";
	$id = $_GET['id_mk'];
	if(isset($_GET['hapus'])){
		$query = mysqli_query($connect,"delete from matkul where kd_mk='$id'");
		if($query){
			header('location:../view_makul.php?hapus=sukses');
		}
	}
?>