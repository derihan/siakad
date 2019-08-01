<?php
    include"../control/config.php";
	$id = $_GET['username'];
	$query = mysqli_query($connect,"select*from yuser where username='$id'");
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
        <h4 class="modal-title text-center" id="myModalLabel" >Edit Mahasiswa</h4>
        </div>

        <div class="modal-body">
            <form action="control/ctrl_edit_user.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="Modal Name">Username</label>
                    <input type="text" name="username"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Password</label>
					<input type="text" name="password"  class="form-control" value="<?php echo $row[1]?>" style="height: 30px;"/>
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
   