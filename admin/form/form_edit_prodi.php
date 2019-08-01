<?php
    include"../control/config.php";
	$id = $_GET['id_prodi'];
	$query = mysqli_query($connect,"select*from prodi where id_prodi='$id'");
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
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Prodi</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_prodi.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group">
                    <label for="Modal Name">Id Prodi</label>
                    <input type="text" name="idp"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Nama Prodi</label>
					<input type="text" name="nama_pd"  class="form-control" value="<?php echo $row[1]?>" style="height: 30px;"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">Fakultas</label>       
                    <textarea name="fak"  class="form-control" style="height: 40px;"><?php echo $row[2]?></textarea>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">Jenjang</label>       
                    <input type="text" name="jenjang"  class="form-control" value="<?php echo $row[3]?>" style="height: 30px;"/>
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
   