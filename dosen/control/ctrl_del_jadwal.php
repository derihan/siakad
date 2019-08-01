
<?php
include("config.php");
$id=$_GET['id_j'];
if(isset($_GET['hapus'])){
	$query=mysqli_query($connect,"delete from jadwal where id_jadwal='$id'");
	if($query){
		header('location:../view_jadwal.php?hapus=sukses');
	} 
}
?>