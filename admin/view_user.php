<?php
include("head.php");
include("function/autonumeric.php");
include("nav.php");
include("sidebar.php");
?>	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tabel User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data User</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<?php
					if (isset($_GET['edit'])) {
						if($_GET['edit']=='sukses'){
				?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Edit Data Berhasil </div>
				<?php
						}
					}
					if (isset($_GET['hapus'])) {
						if($_GET['hapus']=='sukses'){
				?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Hapus Data Berhasil </div>
				<?php
					}}
				?>
				</div>
			</div>
		</div>
<div class="row">
<div class="col-md-6"> </div><!--/.col-->	
<div class="col-md-6"> </div><!--/.col-->
<div class="col-sm-12">
<div class="table-responsive">
<div class="col-sm-4">
    <div class="col-sm-4">
	</div>						
</div>
<div class="col-sm-4">	
</div>
            <div class="col-sm-4">
                <div class="search-box">
					<form action="view_user.php" method="POST">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit" name="ok"><i class="fa fa-search"></i></button>
</form>
		<br>
	</div>
</div>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">nama</th>
	  <th scope="col">akses</th>
	  <th colspan="2">Opsi</th>
    </tr>
  </thead>
<?php
	$search=$_POST['search'];
	if(isset($_POST['ok']))
		{
	$query = mysqli_query($connect,"
	SELECT * FROM yuser
	WHERE username LIKE '%".$search."%'
	OR nama LIKE '%".$search."%' 
	OR akses LIKE '%".$search."%' 
	");
} else {
		$query = mysqli_query($connect,"select * from yuser");
	}
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
	 <td>
		  <a href="#" class="open_modal" data-target="#Edituser" data-toggle="modal" id="<?php echo $row['username']; ?>">
			  <button class="btn btn-primary btn-xs" >
				  <span class="glyphicon glyphicon-pencil"></span>
			  </button>
		  </a>
	  </td>
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
<!--edit modal-->
<div id="Edituser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<?php
include("script.php");
include("foot.php");
?>