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
        </div>

        <div class="modal-body">
                <form action="control/ctrl_del_jadwal.php" name="modal_popup" enctype="multipart/form-data" method="GET">
                <h4 > Hapus Data Jadwal :</h4>
                <div class="form-group">
                    <label for="Modal Name">Id Jadwal</label>
                    <input type="text" name="id_j" value="<?php echo $row['id_jadwal'] ?>" style="height: 30px; visibility: hidden;"/>
                    <label class="form-control"><?php echo $row['id_jadwal'] ?></label>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Mata Kuliah</label>
					<input type="text" name="nama" value="<?php echo $row[1]?>" style="height: 30px; visibility: hidden;"/>
                    <label class="form-control"><?php echo $row['mata_kuliah'] ?></label>
                </div>
				 <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Jam</label>
					<input type="time" name="nama" value="<?php echo $row['jam']?>" style="height: 30px; visibility: hidden;"/>
                    <label class="form-control"><?php echo $row['jam'] ?></label>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Hari</label>
					<input type="time" name="nama" value="<?php echo $row['hari']?>" style="height: 30px; visibility: hidden;"/>
                    <label class="form-control"><?php echo $row['hari'] ?></label>
                </div>
                <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="hapus" value="confirm">
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
   