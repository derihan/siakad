<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					<?php echo $row[1]; ?>
			  </div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
  <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
	</form>
	<ul class="nav menu">
		<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
		
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1"> <em class="fa fa-navicon">&nbsp;</em> Management<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
		  <ul class="children collapse" id="sub-item-1">
			<?php include("menu.php") ?>
		  </ul>
	    </li>
		<li><a href="../control/ctrl_logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div><!--/.sidebar-->