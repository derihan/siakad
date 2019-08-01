<?php
		include("config.php");
		$nim = $_POST['nim'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no = $_POST['no_telp'];
		$agama = $_POST['agama'];
		$jk = $_POST['jk'];
		$angkatan = $_POST['angkatan'];
		$prodi = $_POST['prodi'];
		$ok = $_POST['kirim'];

		if(isset($ok)){
					$query=mysqli_query($connect,"INSERT INTO mahasiswa VALUES('$nim','$nama','$alamat','$no','$agama','$jk','$angkatan','$prodi')");
			
					$query2=mysqli_query($connect,"INSERT INTO yuser VALUES ('$nim','$password','$nama','3')");
					if($query && $query2){
						header("location:../view_mahasiswa.php?insert=sukses");
						} 
				} else {
					header("location:../view_mahasiswa.php");
				}

?>