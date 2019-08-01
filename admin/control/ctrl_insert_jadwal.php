<?php
include("config.php");
$id=$_POST['id_jadwal'];
$hari=$_POST['hari'];
$jam=$_POST['jam'];
$makul=$_POST['makul'];
$dosen=$_POST['id_dosen'];
$ruang=$_POST['ruang'];
$nim=$_POST['nim'];
$ok=$_POST['kirim'];
if(isset($ok)){
	$q_dsn=mysqli_query($connect,"select Nama from dosen where id_dosen='$dosen'");
	$row_ds = mysqli_fetch_row($q_dsn);
	$nm_dosen=$row_ds[0];
	if ($nm_dosen==""){
		header('location:../view_jadwal.php?dosen=false');
	} else {
		$query=mysqli_query($connect,"insert into jadwal 	values('$id','$hari','$jam','$makul','$nm_dosen','$ruang','$nim','$dosen')");
			if($query){
			header('location:../view_jadwal.php?insert=sukses');
		}
	} 
}



?>

