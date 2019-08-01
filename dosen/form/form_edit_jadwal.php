<?php
    include"../control/config.php";
	$id = $_GET['id_jadwal'];
	$query = mysqli_query($connect,"select*from jadwal where id_jadwal='$id'");
	while($row = mysqli_fetch_array($query)){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Jadwal</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_jadwal.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group">
                    <label for="Modal Name">Id jadwal</label>
                    <input type="text" name="id_jadwal"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">hari</label>
					<input type="text" name="hari"  class="form-control" value="<?php echo $row[1]?>" style="height: 30px;"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">jam</label>       
					<input type="time" name="jam"  class="form-control" value="<?php echo $row[2]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">makul</label>       
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
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">nama Dosen</label>       
                    <input type="text" name="dosen"  class="form-control" value="<?php echo $row[4]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">ruang</label>       
                    <input type="text" name="ruang"  class="form-control" value="<?php echo $row[5]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">nim</label>       
                    <input type="text" name="nim"  class="form-control" value="<?php echo $row[6]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">nidn</label>       
                    <input type="text" name="nidn"  class="form-control" value="<?php echo $row[7]?>" style="height: 30px;"/>
                </div>
                <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="edit" value="confirm">
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                </button>
                </div>
                </form>
            </div>
        </div>
        </div>
        <div class="col-md-4">
<?php
}
?>       
        </div>
    </div>
</div>
   