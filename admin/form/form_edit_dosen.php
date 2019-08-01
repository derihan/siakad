<?php
    include"../control/config.php";
	$id = $_GET['id_dosen'];
	$query = mysqli_query($connect,"select*from dosen where id_dosen='$id'");
	while($row = mysqli_fetch_array($query)){
	$jk = $row[4];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Dosen</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_dosen.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group">
                    <label for="Modal Name">Id Dosen</label>
                    <input type="text" name="nidn"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Nama Dosen</label>
					<input type="text" name="nama"  class="form-control" value="<?php echo $row[1]?>" style="height: 30px;"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">Alamat</label>       
                    <textarea name="alamat"  class="form-control" style="height: 40px;"><?php echo $row[2]?></textarea>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Date">No Telepon</label>       
                    <input type="text" name="nope"  class="form-control" value="<?php echo $row[3]?>" style="height: 30px;"/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <p>
		 			<label>Jenis Kelamin</label><br>
		  			<label>
		    			<input type="radio" name="jk" value="L" id="RadioGroup1_0" <?php if($jk == 'L'){echo "checked";} ?>>
		    			Laki-Laki</label>
		  			<br>
		  			<label>
		    		<input type="radio" name="jk" value="P" id="RadioGroup1_1" <?php if($jk == 'P'){echo "checked";} ?> >
		    		Perempuan</label>
		  			<br>
		  			</p>       
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
   