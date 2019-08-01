<?php
include("config.php");
$id=$_POST['id_jadwal'];
$hari=$_POST['hari'];
$jam=$_POST['jam'];
$makul=$_POST['makul'];
$ruang=$_POST['ruang'];
$nim=$_POST['nim'];
$nidn=$_POST['nidn'];
$ok=$_POST['kirim'];

if(isset($ok)){
	$q_dsn=mysqli_query($connect,"select Nama from dosen where id_dosen='$nidn'");
	$row_ds = mysqli_fetch_row($q_dsn);
	$dosen=$row_ds[0];
	
	$query=mysqli_query($connect,"insert into jadwal values('$id','$hari','$jam','$makul','$dosen','$ruang','$nim','$nidn')");
	if($query){
		header('location:../view_jadwal.php?insert=sukses');
	}
}
?>

