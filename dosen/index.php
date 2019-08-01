<?php
include("head.php");
include("function/autonumeric.php");
include("nav.php");
include("sidebar.php");
?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<div class="col-md-12">
			
				<div class="panel panel-default"> 
					<div class="panel panel-default"> 
					<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 	Selamat datang di dashboard dosen </div>
				</div>
				</div>
			
		</div>
		<div class="col-md-12">
		<div class="panel panel-container">
			<div class="row">
				
			</div><!--/.row-->
			
		</div>
			</div>
		<div class="row">
			
		</div><!--/.row--><!--/.row-->
		
		<div class="row">
			<div class="col-md-5"> 
<div class="table-responsive">
	<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id makul</th>
      <th scope="col">nama makul</th>
      <th scope="col">sks</th>
	  <th scope="col">nidn</th>
    </tr>
  </thead>
<?php
	$query = mysqli_query($connect,"select * from matkul where id_dosen='$username'");
	$result = mysqli_num_rows($query);
	$no =1;
	if($result < 1){
?>
  <tbody>
	<tr>
		<td colspan="11"><h1>Data Kosong</h1></td>
	</tr>
<?php
	}
	while($row = mysqli_fetch_array($query)){
?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
	  <td><?php echo $row[3]; ?></td>
    </tr>
  </tbody>
<?php
	}	
?>
</table>
</div>
			</div><!--/.col-->
			<div class="col-md-7"> 
<div class="table-responsive">
	<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
	   <th scope="col">Id Nilai</th>
      <th scope="col">Nim</th>
	  <th scope="col">id makul</th>
	   <th scope="col">id dosen</th>	
	  <th scope="col">absensi</th>
	  <th scope="col">tugas</th>
	  <th scope="col">mid</th>
	  <th scope="col">final</th>
	  <th scope="col">hasil akhir</th>
	  <th scope="col">nilai akhir</th>
	   <th scope="col">Semester</th>
	   	
    </tr>
  </thead>
<?php
	$query = mysqli_query($connect,"select * from nilai where id_dosen='$username'");
	$result = mysqli_num_rows($query);
	$no =1;
	if($result < 1){
?>
  <tbody>
	<tr>
		<td colspan="13"><h1>Data Kosong</h1></td>
	</tr>
<?php
	}
	while($row = mysqli_fetch_array($query)){
?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
	  <td><?php echo $row[3]; ?></td>
	   <td><?php echo $row[4]; ?></td>
      <td><?php echo $row[5]; ?></td>
	  <td><?php echo $row[6]; ?></td>
	<td><?php echo $row[7]; ?></td>
	 <td><?php echo $row[8]; ?></td>
	 <td><?php echo $row[9]; ?></td>
	<td><?php echo $row[10]; ?></td>
    </tr>
  </tbody>
<?php
	}	
?>
</table>
</div>
			</div><!--/.col-->
			<div class="col-sm-12"> 
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id jadwal</th>
      <th scope="col">hari</th>
      <th scope="col">jam</th>
	  <th scope="col">mata kuliah</th>
	  <th scope="col">nama dosen</th>
	  <th scope="col">ruangan</th>
	  <th scope="col">nim</th>
	  <th scope="col">Id dosen</th>
	 
    </tr>
  </thead>
<?php
	$query = mysqli_query($connect,"select * from jadwal where id_dosen='$username'");
	$result = mysqli_num_rows($query);
	$no =1;
	if($result < 1){
?>
  <tbody>
	<tr>
		<td colspan="11"><h1>Data Kosong</h1></td>
	</tr>
<?php
	}
	while($row = mysqli_fetch_array($query)){
?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
	  <td><?php echo $row[3]; ?></td>
	   <td><?php echo $row[4]; ?></td>
	  <td><?php echo $row[5]; ?></td>
	   <td><?php echo $row[6]; ?></td>
	  <td><?php echo $row[7]; ?></td>
    </tr>
  </tbody>
<?php
	}	
?>
</table>
		</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->	
<?php
include("script.php");
include("foot.php");
?>