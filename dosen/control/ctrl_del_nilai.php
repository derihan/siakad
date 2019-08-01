<?php
include("config.php");
$id=$_GET['id_nilai'];
if(isset($_GET['hapus'])){
	$query=mysqli_query($connect,"delete from nilai where id_nilai='$id'");
	if($query){
		header("location:../view_nilai.php?hapus=sukses");
	}
}
?>