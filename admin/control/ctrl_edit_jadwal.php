<?php
include("config.php");
$id = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$makul = $_POST['makul'];
$nm_dosen= $_POST['nm_dosen'];
$ruang = $_POST['ruang'];
$nim=$_POST['nim'];
$nidn=$_POST['nidn'];
$edit=$_POST['edit'];

if(isset($edit)){
	$q_dsn=mysqli_query($connect,"select Nama from dosen where id_dosen='$nidn'");
	$row_ds = mysqli_fetch_row($q_dsn);
	$dosen=$row_ds[0];
	$query=mysqli_query($connect,"UPDATE jadwal SET hari='$hari', jam='$jam', mata_kuliah='$makul', nm_dosen='$nm_dosen', ruangan='$ruang', nim='$nim', id_dosen='$nidn' where id_jadwal='$id'");
	if($query){
		echo"<script>alert('Edit Data Sukses');window.location='../view_jadwal.php'</script>";
	}
}
?>