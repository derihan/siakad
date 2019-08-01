<?php
	include("config.php");
	$idmk=$_POST['id_mk'];
	$nama_mk=$_POST['nama_mk'];
	$sks =$_POST['sks'];
	$nidn = $_POST['nidn'];
	if(isset($_POST['edit'])){
		$query=mysqli_query($connect,"update matkul set nama_mk='$nama_mk', sks='$sks', id_dosen='$nidn' where kd_mk='$idmk'");
		if ($query) {
			echo "<script>alert('Edit Data Sukses');window.location='../view_makul.php'</script>";
		}
	}
?>