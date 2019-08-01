<?php
include("config.php");
$id_nilai = $_POST['id_n'];
$nim = $_POST['nim'];
$kd_mk = $_POST['kd_mk'];
$nidn=$_POST['nidn'];
$abs = $_POST['abs'];
$tugas = $_POST['tugas'];
$mid = $_POST['mid'];
$uas = $_POST['uas'];
$hasil = $_POST['hasil'];
$nilai = $_POST['nilai'];
$sms = $_POST['sms'];
$ok = $_POST['kirim'];

if(isset($ok)){	
	$query = mysqli_query($connect,"INSERT INTO nilai VALUES ('$id_nilai','$nim','$kd_mk','$nidn','$abs','$tugas','$mid','$uas','$hasil','$nilai','$sms')");
	if($query){ 
		header("location:../view_nilai.php?insert=sukses");
		
	} else {
		var_dump($query);
	}
}
?>