<?php
include("head.php");
include("nav.php");
include("sidebar.php");
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profil Saya</li>
			</ol>
		</div><!--/.row-->
	  	<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Profil Saya</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<?php
					if (isset($_GET['change'])) {
						if($_GET['change']=='sukses'){
				?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Ganti Password Sukses </div>
				<?php
						}
					}
					if (isset($_GET['edit'])) {
						if($_GET['edit']=='sukses'){
				?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Edit Profil Berhasil </div>
				<?php
					}}
				?>
				</div>
			</div>
		</div><!--/.row--><!--/.row-->
		<div class="row">
			<div class="col-md-12"> 
				<form action="control/ctrl_edit_pass.php" method="post"> 
<div class="snippet">
    <div class="row">
		<div class="col-md-6">
			<div class="panel panel-success">
					<div class="panel-heading">Edit Password
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						
						<form action="control/ctrl_edit_pass.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="Modal Name">Username</label>
                    <input type="text" name="username"  value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;" />
                    <label class="form-control"><?php echo $row[0] ?></label>
                </div>
				<?php 
						$sqll=mysqli_query($connect,"select password from yuser where username='$username'");
						while($passe=mysqli_fetch_array($sqll)){
						?>
                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Password Lama</label>
					<input type="password" name="password"  id="mypass" class="form-control" 
				    value="<?php echo $passe['password'];?>" style="height: 30px;" readonly/>
                </div>
				<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Description">Password Baru</label>
					<input type="password" name="password_new" id="newpass" class="form-control" value="" style="height: 30px;"/>
                </div>
				<?php
						}
				?>
				<div class="form-group" style="padding-bottom: 10px; ">
					<input type="button" style="display:none" id="hide" value="Hide Password" onclick="HidePassword()" >
						<input type="button" id="show" value="Show Password" onclick="ShowPassword()" >
				</div>
                <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="change" value="confirm">
                </div>
                </form>
					</div>
				</div>
		</div>
    	<div class="col-sm-6">
          <div class="panel panel-primary">
					<div class="panel-heading">Edit Profil
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						 <form class="form" action="control/ctrl_edit_profil.php" method="post" id="registrationForm">
                      <div class="form-group">
                         <div class="form-group">
							
								 	 <label for="Modal Name">NIDN</label>
                   				 <input type="text" name="nidn" value="<?php echo $row[0] ?>" style="height: 30px; visibility: hidden;"/>
                    			<label class="form-control"><?php echo $row[0] ?></label>
							 
                   			
               			 </div>
						<div class="form-grup">
                         
                              <label for="first_name"><h4> Nama</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="<?php echo $row[1]; ?>">
                          
                      </div>
                     
                      <div class="form-group">
                         
                             <label for="mobile"><h4>No Telp</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" value="<?php echo $row[3]; ?>">
                       
                      </div>
                      <div class="form-group">
                          
                        
                              <label ><h4>Alamat</h4></label>
                              <input  class="form-control" id="location" name="alamat" placeholder="somewhere" value="<?php echo $row[2]; ?>">
                     
                      </div>
					 
                      <div class="form-group">
                          
                                <br>
                              	<input class="btn btn-lg btn-success glyphicon glyphicon-ok-sign" type="submit" name="save" value="SAVE">
                               
                           
                      </div>
				
             </div><!--/tab-pane-->
				</form>
					</div>
				</div>
          </div><!--/tab-content-->
		
        </div><!--/col--->
		
    </div><!--/row-->
	<br>
<br>
			</div>
	  </div><!--/.row-->
	</div>	<!--/.main-->
<?php
include("script.php");
include("foot.php");
?>	