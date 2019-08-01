<?php
include("head.php");
include("nav.php");
include("sidebar.php");

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Nilai Mahasiswa</li>
			</ol>
		</div><!--/.row-->
	  	<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Nilai Mahasiswa</h1>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12"> 
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
	  <th scope="col">id nilai</th>
	  <th scope="col">id_makul</th>
	  <th scope="col">absensi</th>
	  <th scope="col">tugas</th>
	  <th scope="col">mid</th>
		<th scope="col">final</th>
	  <th scope="col">nilai akhir</th>	
    </tr>
  </thead>
<?php
			
	$query = mysqli_query($connect,"select*from nilai");
	$result = mysqli_num_rows($query);
	$no=1;
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
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
	  <td><?php echo $row[4]; ?></td>
	   <td><?php echo $row[5]; ?></td>
      <td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
    </tr>
<?php
	}	
?>
  </tbody>
</table>
</div>
			</div>
	  </div><!--/.row-->
	</div>	<!--/.main-->
<?php
include("script.php");
include("foot.php");
?>	
