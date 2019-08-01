<?php
	include("config.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$query = mysqli_query($connect,"UPDATE yuser SET password = '$pass' WHERE username = '$username';");
	if($query){
	 echo "<script>alert('Edit User Berhasil'); window.location='../view_user.php'</script>";
	}
?>