<?php
    include"../control/config.php";
	$id = $_GET['id_nilai'];
	$query = mysqli_query($connect,"select*from nilai where id_nilai='$id'");
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
        <h4 class="modal-title text-center" id="myModalLabel" >Hapus Data Nilai</h4>
        </div>

        <div class="modal-body">
                <form action="control/ctrl_del_nilai.php" name="modal_popup" enctype="multipart/form-data" method="GET">
                <h4 > Hapus Nilai:</h4>
                <div class="form-group">
                    <label for="Modal Name">Id Nilai</label>
                    <input type="text" name="id_nilai" value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;"/>
                    <label class="form-control"><?php echo $row[0] ?></label>
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
   