<?php
    include"../control/config.php";
	$id = $_GET['kd_mk'];
	$query = mysqli_query($connect,"select*from matkul where kd_mk='$id'");
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
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Mata Kuliah</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_makul.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group">
                    <label for="Modal Name">Id Mata Kuliah</label>
                    <input type="text" name="id_mk"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Nama Makul</label>
					<input type="text" name="nama_mk"  class="form-control" value="<?php echo $row[1]?>" style="height: 30px;"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">SKS</label>       
                    <input type="text" name="sks"  class="form-control" value="<?php echo $row[2]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">nidn</label>       
                    <input type="text" name="nidn"  class="form-control" value="<?php echo $row[3]?>" style="height: 30px;"/>
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
   