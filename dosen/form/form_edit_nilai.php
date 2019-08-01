<?php
include("../control/config.php");
$id= $_GET['id_nilai'];

$query = mysqli_query($connect,"select*from nilai where id_nilai ='$id'");
while($row =mysqli_fetch_array($query)){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Nilai</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_nilai.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group">
                    <label for="Modal Name">Id Nilai</label>
                    <input type="text" name="id_nilai" value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>
				<div class="form-group">
                    <label for="Modal Name">NIM</label>
                    <input type="text" name="nim"  value="<?php echo $row[1] ?>" style="height: 30px;" class="form-control"/>
                    
                </div>
				<div class="form-group">
                    <label for="Modal Name">Id Makul</label>
                    <input type="text" name="id_makul"  value="<?php echo $row[2] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[2] ?></label>
                </div>
				<div class="form-group">
                    <label for="Modal Name">nidn</label>
                    <input type="text" name="id_dosen"  value="<?php echo $row[3] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[3] ?></label>
                </div>
				<div class="form-group">
                    <label for="Modal Name">absensi</label>
                    <input type="text" name="absensi" class="form-control" value="<?php echo $row[4] ?>" style="height: 30px;"  />
                </div>
				<div class="form-group">
                    <label for="Modal Name">Tugas</label>
                    <input type="text" name="tugas" class="form-control" value="<?php echo $row[5] ?>" style="height: 30px;" />
                </div>
				<div class="form-group">
                    <label for="Modal Name">mid</label>
                    <input type="text" name="mid" class="form-control" value="<?php echo $row[6] ?>" style="height: 30px;" />
                </div>
				<div class="form-group">
                    <label for="Modal Name">final</label>
                    <input type="text" name="final" class="form-control" value="<?php echo $row[7] ?>" style="height: 30px;" />
                </div>
				<div class="form-group">
                    <label for="Modal Name">hasil</label>
                    <input type="text" name="hasil" class="form-control" value="<?php echo $row[8] ?>" style="height: 30px;" />
                </div>
				<div class="form-group">
                    <label for="Modal Name">nilai</label>
                    <input type="text" name="nilai" class="form-control" value="<?php echo $row[9] ?>" style="height: 30px;" />
                </div>
				<div class="form-group">
                    <label for="Modal Name">semester</label>
                    <input type="text" name="sms" class="form-control" value="<?php echo $row[10] ?>" style="height: 30px;" />
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
<?php
 }
?>
        <div class="col-md-4">    
        </div>
    </div>
</div>
   