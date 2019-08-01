
<?php
function auto($tabel,$kolom,$lebar="",$awal=''){
		global $connect;
		$query=mysqli_query($connect,"select $kolom from $tabel order by $kolom desc limit 1");
		$jml_data =mysqli_num_rows($query);
		if($jml_data == 0){
			$nomor = 1;
		} else {
			$row = mysqli_fetch_array($query);
			$nomor = intval(substr($row[0],strlen($awal)))+1;
		}
		
		if($lebar>0){
			$angka = $awal.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
		} else {
			$angka = $awal.$nomor;
		}
		return $angka;
	}
?>