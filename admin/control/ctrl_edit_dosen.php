<?php
include("config.php");
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nope = $_POST['nope'];
$jk = $_POST['jk'];
$edit = $_POST['edit'];

if(isset($edit)){
	$query=mysqli_query($connect,"UPDATE dosen SET Nama='$nama', Alamat='$alamat', No_tlp='$nope', Jenis_kelamin='$jk' where id_dosen='$nidn'");
	$query2=mysqli_query($connect,"UPDATE yuser SET nama='$nama' where username='$nidn'");
	if($query and $query2){
		echo"<script>alert('Edi Data Sukses');window.location='../view_dosen.php'</script>";
	}
}
?>