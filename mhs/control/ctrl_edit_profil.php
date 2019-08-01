<?php
include("config.php");
$nim=$_POST['nim'];
$nama=$_POST['first_name'];
$notelp=$_POST['mobile'];
$alamat = $_POST['alamat'];

if(isset($_POST['save'])){
	$query=mysqli_query($connect,"UPDATE mahasiswa SET Nama='$nama', Alamat='$alamat', No_telepon='$notelp' where NIM='$nim'");
	$query2=mysqli_query($connect,"UPDATE yuser SET nama='$nama' WHERE username='$nim'");
	if($query and $query2){
		header('location:../view_profil_mhs.php?edit=sukses');
	}
}
?>