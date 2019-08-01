
<?php
include("config.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nope = $_POST['nope'];
$agama = $_POST['agama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
if(isset($_POST['edit'])){
	$query = mysqli_query($connect,"UPDATE mahasiswa SET Nama = '$nama', Alamat = '$alamat', No_telepon = '$nope', Agama = '$agama', Jenis_Kelamin = '$jk', Angkatan = '$angkatan', id_prodi = '$prodi' WHERE NIM= '$nim'");
if($query){
	header("location:../view_mahasiswa.php?edit=sukses");
}
}
?>