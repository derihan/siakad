
<?php
include("config.php");
$id=$_GET['prodi'];
if(isset($_GET['hapus'])){
	$query=mysqli_query($connect,"delete from prodi where id_prodi='$id'");
	if($query){
		header('location:../view_prodi.php?hapus=sukses');
	}
}
?>