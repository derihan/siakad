<?php
include("config.php");
$nidn=$_POST['nidn'];
$nama=$_POST['first_name'];
$notelp=$_POST['mobile'];
$alamat = $_POST['alamat'];

if(isset($_POST['save'])){
	$query=mysqli_query($connect,"UPDATE dosen SET Nama='$nama', Alamat='$alamat', No_tlp='$notelp' where id_dosen='$nidn'");
	$query2=mysqli_query($connect,"UPDATE yuser SET nama='$nama' WHERE username='$nidn'");
	if($query and $query2){
		header('location:../view_profil.php?edit=sukses');
	}
}
?>