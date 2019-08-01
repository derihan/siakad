<?php
include("head.php");
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
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default"> 
					<div class="panel panel-default"> 
					<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Welcome to the mahasiswa dashboard panel  </div>
				</div>
				</div>
			</div>
			<div class="col-md-12 "> 
			</div>
		</div><!--/.row--><!--/.row-->
		
		<div class="row">
			<div class="col-md-6"> </div><!--/.col-->
			<div class="col-md-6"> </div><!--/.col-->
			<div class="col-sm-12">
<table class="table-responsive table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Mata Kuliah</th>
	  <th scope="col">Dosen</th>
	  <th scope="col">Ruangan</th>
    </tr>
  </thead>
<?php
$no=1;
$sql=mysqli_query($connect,"select*from jadwal where nim='$username'");
$res=mysqli_num_rows($sql);
if($res < 1){
?>
  <tbody>
	<tr>
		<td colspan="11"><h1>Data Kosong</h1></td>
	</tr>
<?php
	}
while($rows=mysqli_fetch_array($sql)){
?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $rows['hari']; ?></td>
      <td><?php echo $rows['jam']; ?></td>
      <td><?php echo $rows['mata_kuliah']; ?></td>
	  <td><?php echo $rows['nm_dosen']; ?></td>
	  <td><?php echo $rows['ruangan']; ?></td>
    </tr>
  </tbody>
<?php
}
?>
</table>
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<?php
include("script.php");
include("foot.php");
?>