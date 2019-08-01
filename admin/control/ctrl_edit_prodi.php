<?php
include("config.php");
$idp=$_POST['idp'];
$nama_pd=$_POST['nama_pd'];
$fak=$_POST['fak'];
$jenjang=$_POST['jenjang'];

if(isset($_POST['edit'])){
	$query=mysqli_query($connect,"update prodi set nama_prodi='$nama_pd', fakultas='$fak', jenjang='$jenjang' where id_prodi='$idp'");
	if($query){
		echo"<script>alert('Edit Data Sukses');window.location='../view_prodi.php'</script>";
	}
}
?>