<?php
include("config.php");
$id=$_GET['nidn'];
if(isset($_GET['hapus'])){
	$query=mysqli_query($connect,"delete from dosen where id_dosen='$id'");
	$query2=mysqli_query($connect,"delete from yuser where username='$id'");
	if($query and $query2){
		header('location:../view_dosen.php?hapus=sukses');
	}
}
?>