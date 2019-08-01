<?php
include("head.php");
include("function/autonumeric.php");
include("nav.php");
include("sidebar.php");
?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<div class="col-md-12">
			
				<div class="panel panel-default"> 
					<div class="panel panel-default"> 
					<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> 	Selamat datang di dashboard admin </div>
				</div>
				</div>
			
		</div>
		<div class="col-md-12">
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select*from mahasiswa");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Mahasiswa</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-address-card color-orange"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select*from dosen");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Dosen</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-graduation-cap color-red"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select*from matkul");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Mata Kuliah</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl  fa-building  color-green"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select*from ruangan");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Ruang Kelas</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl  fa-table  color-orange"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select distinct jenjang from prodi");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Program studi</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl  fa-th  color-yellow"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select distinct fakultas from prodi");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Fakultas</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl  fa-list  color-blue"></em>
							<div class="large">
								<?php
									$mysqli=mysqli_query($connect,"select distinct nama_prodi from prodi");
									$res = mysqli_num_rows($mysqli);
									echo $res;
								?>
							</div>
							<div class="text-muted">Jurusan </div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
			
		</div>
			</div>
		<div class="row">
			
		</div><!--/.row--><!--/.row-->
		
		<div class="row">
			<div class="col-md-6"> </div><!--/.col-->
			
			
			<div class="col-md-6"> </div><!--/.col-->
			<div class="col-sm-12"> </div>
		</div><!--/.row-->
	</div>	<!--/.main-->	
<?php
include("script.php");
include("foot.php");
?>