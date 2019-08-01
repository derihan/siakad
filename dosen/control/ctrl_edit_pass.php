<?php
include("config.php");
$user=$_POST['username'];
$pass=$_POST['password_new'];

if(isset($_POST['change'])){
	$query=mysqli_query($connect,"update yuser set password='$pass' where username='$user'");
	if($query){
		header('location:../view_profil.php?change=sukses');
	}
}
?>