<?php
include("config.php");
$id_n = $_POST['id_nilai'];
$nim=$_POST['nim'];
$idmk=$_POST['id_makul'];
$nidn = $_POST['id_dosen'];
$absensi = $_POST['absensi'];
$tugas = $_POST['tugas'];
$mid = $_POST['mid'];
$final = $_POST['final'];
$hasil = $_POST['hasil'];
$nilai = $_POST['nilai'];
$sms=$_POST['sms'];
if(isset($_POST['edit'])){
	$query = mysqli_query($connect,"UPDATE nilai SET NIM='$nim', kd_mk='$idmk', id_dosen='$nidn', absensi ='$absensi', tugas='$tugas', mid='$mid', final='$final', hasil_akhir='$hasil', nilai_akhir='$nilai', semester='$sms' WHERE id_nilai='$id_n'");
	if($query){
		echo"<script>alert('Edit data berhasil');window.location='../view_nilai.php'</script>";
	}
}

?>
