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
				<li class="active">Tabel Prodi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Prodi</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<?php
					if (isset($_GET['insert'])) {
						if($_GET['insert']=='sukses'){
				?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Insert Data berhasil </div>
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
		</div><!--/.row--><!--/.row-->
		
		<div class="row">
			<div class="col-md-6"> </div><!--/.col-->
			
			
			<div class="col-md-6"> </div><!--/.col-->
			<div class="col-sm-12">
<div class="table-responsive">
<div class="col-sm-4">
        <div class="col-sm-4">
			<a href="" data-toggle="modal" data-target="#modalSubscriptionForm">
				<button type="button" class="btn btn-danger btn-rounded " style="width: 100px; text-align: center;" >  
					<i class="fa fa-plus"></i>
				</button>
			</a>
			<br>
		</div>						
</div>
<div class="col-sm-4"></div>
            <div class="col-sm-4">
            <div class="search-box">
			<form action="view_prodi.php" method="POST">
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
      <th scope="col">id_prodi</th>
      <th scope="col">nama_prodi</th>
	  <th scope="col">fakultas</th>
	  <th scope="col">jenjang</th>
	  <th scope="col">kelas</th>
	  <th colspan="2">Opsi</th>
    </tr>
  </thead>
<?php
	$search=$_POST['search'];
	if(isset($_POST['ok']))
		{
	$query = mysqli_query($connect,"
	SELECT * FROM prodi
	WHERE id_prodi LIKE '%".$search."%'
	OR nama_prodi LIKE '%".$search."%' 
	OR fakultas LIKE '%".$search."%' 
	OR jenjang LIKE '%".$search."%'
	");
} else {
		$query = mysqli_query($connect,"select * from prodi");
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
		  <a href="#" class="open_modal" data-target="#Editprodi" data-toggle="modal" id="<?php echo $row['id_prodi']; ?>">
			  <button class="btn btn-primary btn-xs" >
				  <span class="glyphicon glyphicon-pencil"></span>
			  </button>
		  </a>
	  </td>
      <td>
		  <a href="#" class="delete" data-target="#Delprodi" data-toggle="modal" id="<?php echo $row['id_prodi']; ?>">
				<button class="btn btn-danger btn-xs" >
				 <span class="glyphicon glyphicon-trash"></span>
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
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
<form action="control/ctrl_insert_prodi.php" method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Dosen</h4>
      </div>
      <div class="modal-body mx-3">
		 <div class="md-form">
		  <label data-error="wrong" data-success="right" for="form3">Id Prodi</label>	 
          <input type="text" id="form3" name="id_pd" 
				 value="<?php echo auto("prodi","id_prodi",4,"PD") ?>" style="height: 30px; visibility: hidden" required>
		  <label class="form-control"><?php echo auto("prodi","id_prodi",4,"PD") ?></label>
        </div>
        <div class="md-form">
		  <label data-error="wrong" data-success="right" for="form3">Nama Prodi</label>	 
          <input type="text" id="form3" class="form-control validate" name="nama" 
				 value="" style="height: 30px;" required>
        </div>
        <div class="md-form "> <label data-error="wrong" data-success="right" for="form2" >Fakultas</label>
          <select name="fakultas" class="form-control">
			<option value="Ilmu komputer">Ilmu Komputer</option>
			<option value="Ilmu sosial">Ilmu Sosial</option> 
			<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>   
		  </select>
        </div>
		<div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="form3">Jenjang</label>	 
          <select name="jenjang" class="form-control">
			<option value="D3">D3</option>
			<option value="S1">S1</option>  
		  </select>
        </div>
      <div class="modal-footer d-flex justify-content-center">
		  <input class="btn btn-success" type="submit" name="kirim" value="confirm">
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                </button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
<div id="Editprodi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!--Hapus modal-->
<div id="Delprodi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mydeletelabel" aria-hidden="true"></div>
<?php
include("script.php");
include("foot.php");
?>