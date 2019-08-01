<?php
include("config.php");
$id_dosen=$_POST['id_dosen'];
$pass=$_POST['password'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$jk = $_POST['jk'];
if(isset($_POST['kirim'])){
	$query=mysqli_query($connect,"INSERT INTO dosen VALUES('$id_dosen','$nama','$alamat','$no_telp','$jk')");
	$query2=mysqli_query($connect,"INSERT INTO yuser VALUES('$id_dosen','$pass','$nama','2')");
	if($query and $query2){
		header('location:../view_dosen.php?insert=sukses');
	}
}
?>