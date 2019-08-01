<?php
include("config.php");
$id=$_GET['id_r'];
if(isset($_GET['hapus'])){
	$query=mysqli_query($connect,"delete from ruangan where id_ruang='$id'");
	if($query){
		header('location:../view_ruangan.php?hapus=sukses');
	}
}
?>