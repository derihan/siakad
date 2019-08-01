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
				<li class="active">Tabel Jadwal</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Jadwal</h1>
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
           <div class="input-group">
			<form action="view_jadwal.php" method="POST">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit" name="ok"><i class="fa fa-search"></i></button>
</form>
		</div>
</div>

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
	  <th colspan="2">Opsi</th>
    </tr>
  </thead>
<?php
		$search=$_POST['search'];
	if(isset($_POST['ok']))
{
	
	$query = mysqli_query($connect,"
	SELECT * FROM jadwal 
	WHERE id_jadwal LIKE '%".$search."%'
	OR hari LIKE '%".$search."%' 
	OR mata_kuliah LIKE '%".$search."%'
	OR ruangan LIKE '%".$search."%'
	OR nm_dosen LIKE '%".$search."%' and id_dosen='$username' 
	");
} else {
	$query = mysqli_query($connect,"select * from jadwal where id_dosen='$username'");}
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
	 <td>
		  <a href="#" class="open_modal" data-target="#Editjadwal" data-toggle="modal" id="<?php echo $row['id_jadwal']; ?>">
			  <button class="btn btn-primary btn-xs" >
				  <span class="glyphicon glyphicon-pencil"></span>
			  </button>
		  </a>
	  </td>
      <td>
		  <a href="#" class="delete" data-target="#Deljadwal" data-toggle="modal" id="<?php echo $row['id_jadwal']; ?>">
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
<form action="control/ctrl_insert_jadwal.php" method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Jadwal</h4>
      </div>
      <div class="modal-body mx-3">
		 <div class="md-form">
		  <label data-error="wrong" data-success="right" for="form3">Id Jadwal</label>	 
          <input type="text" id="form3" name="id_jadwal" 
				 value="<?php echo auto("jadwal","id_jadwal",4,"X") ?>" style="height: 30px; visibility: hidden" required>
		  <label class="form-control"><?php echo auto("jadwal","id_jadwal",4,"X") ?></label>
        </div>
        <div class="md-form">
		  <label data-error="wrong" data-success="right" for="form3">Hari</label>	 
          <input type="text" id="form3" class="form-control validate" name="hari" 
				 value="" style="height: 30px;" required>
        </div>
        <div class="md-form "> <label data-error="wrong" data-success="right" for="form2" >jam</label>
          <input type="time" id="form2" class="form-control validate" name="jam" style="height: 30px;" required>
        </div>
		<div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="form3">mata kuliah</label>	 
           <select class="form-control" name="makul">
		  <?php $sql=mysqli_query($connect,"select nama_mk from matkul"); 
			while($data=mysqli_fetch_array($sql)){  
		  ?>
			<option value="<?php echo $data['nama_mk']; ?>" ><?php echo $data['nama_mk']; ?></option> 
		  <?php
			}
		  ?>
		  </select>
        </div>
		 <div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="form3">ruangan</label>	 
          <select class="form-control" name="ruang">
		  <?php $sq=mysqli_query($connect,"select gedung,lantai,no from ruangan"); 
			while($dat=mysqli_fetch_array($sq)){  
		  ?>
			<option value="<?php $a = $dat[0];
		  $b = $dat[1];
		  $c = $dat[2];
		echo $a.'.'.$b.'.'.$c?>" ><?php echo $a.'.'.$b.'.'.$c ?></option> 
		  <?php
			}
		  ?>
		  </select>
        </div> 
		<div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="form3">nim</label>	 
          <input type="text" id="form3" class="form-control validate" name="nim" style="height: 30px;" required>
        </div>
		<div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="form3">id dosen</label>	 
          <input type="text" id="form3" name="nidn" style="height: 30px;visibility: hidden;" value="<?php echo $username ?>">
		 <label class="form-control" class="form-control validate"  ><?php echo $username ?></label>
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
<div id="Editjadwal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!--Hapus modal-->
<div id="Deljadwal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mydeletelabel" aria-hidden="true"></div>
<?php
include("script.php");
include("foot.php");
?>