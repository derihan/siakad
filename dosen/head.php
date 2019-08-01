<?php 
	error_reporting();
	session_start();
	include("control/config.php");
	if(empty($_SESSION['username'])){
		header('location:../index.php');
	}
	$username = $_SESSION['username'];
	$query = mysqli_query($connect,"select * from dosen where id_dosen='$username'");
	$row = mysqli_fetch_row($query);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>University in Diversity</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>