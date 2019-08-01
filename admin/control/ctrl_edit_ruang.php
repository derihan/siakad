<?php
include("config.php");
$id=$_POST['id_r'];
$gedung=$_POST['gdg'];
$lantai=$_POST['lantai'];
$no=$_POST['no'];

if(isset($_POST['edit'])){
	$query=mysqli_query($connect,"update ruangan set gedung='$gedung', lantai='$lantai', no='$no' where id_ruang='$id'");
	if($query){
		echo"<script>alert('Edit Data Sukses');window.location='../view_ruangan.php'</script>";
	}
}
?>