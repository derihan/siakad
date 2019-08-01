<?php
	session_start();
	include("config.php");
	$user = $_POST['username'];
	$pass = $_POST['pass'];

	if ($user != "" and $pass != "") {
		$query = mysqli_query($connect,"select * from yuser where username ='$user' and password ='$pass'");
		$result = mysqli_num_rows($query);
		if ($result == '1') {
			$privilage = $query -> fetch_array();
			$akses = $privilage[3];
			$_SESSION['username']=$user;
			switch ($akses) {
				case '1':
					header('location:../admin/index.php');			
					break;
				case '3':
					header('location:../mhs/index.php');
					break;
				case '2':
					header('location:../dosen/index.php');			
					break;
				default:
					header('location:../index.php');
			}
		} else {
			echo "<script>alert('Silahkan Masukan password yang benar'); window.location = '../index.php'</script>";
		}
	} else {
		echo "<script>alert('password atau username tidak boleh kosong'); window.location = '../index.php'</script>";
	}
?>