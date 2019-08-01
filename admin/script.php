	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>	
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_mahasiswa.php", 
    			   type: "GET",
    			   data : {NIM: m,}, 
    			   success: function (ajaxData){
      			   $("#Editmhs").html(ajaxData);
      			   $("#Editmhs").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_user.php", 
    			   type: "GET",
    			   data : {username: m,}, 
    			   success: function (ajaxData){
      			   $("#Edituser").html(ajaxData);
      			   $("#Edituser").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_nilai.php", 
    			   type: "GET",
    			   data : {id_nilai: m,}, 
    			   success: function (ajaxData){
      			   $("#Editnilai").html(ajaxData);
      			   $("#Editnilai").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_dosen.php", 
    			   type: "GET",
    			   data : {id_dosen: m,}, 
    			   success: function (ajaxData){
      			   $("#Editdosen").html(ajaxData);
      			   $("#Editdosen").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_makul.php", 
    			   type: "GET",
    			   data : {kd_mk: m,}, 
    			   success: function (ajaxData){
      			   $("#Editmk").html(ajaxData);
      			   $("#Editmk").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_prodi.php", 
    			   type: "GET",
    			   data : {id_prodi: m,}, 
    			   success: function (ajaxData){
      			   $("#Editprodi").html(ajaxData);
      			   $("#Editprodi").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_ruang.php", 
    			   type: "GET",
    			   data : {id_ruang: m,}, 
    			   success: function (ajaxData){
      			   $("#Editr").html(ajaxData);
      			   $("#Editr").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script>
	$(".open_modal").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_edit_jadwal.php", 
    			   type: "GET",
    			   data : {id_jadwal: m,}, 
    			   success: function (ajaxData){
      			   $("#Editjadwal").html(ajaxData);
      			   $("#Editjadwal").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_mahasiswa.php", 
    			   type: "GET",
    			   data : {NIM: m,}, 
    			   success: function (ajaxData){
      			   $("#Deletemhs").html(ajaxData);
      			   $("#Deletemhs").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_nilai.php", 
    			   type: "GET",
    			   data : {id_nilai: m,}, 
    			   success: function (ajaxData){
      			   $("#Deletenilai").html(ajaxData);
      			   $("#Deletenilai").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
   <script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_dosen.php", 
    			   type: "GET",
    			   data : {id_dosen: m,}, 
    			   success: function (ajaxData){
      			   $("#Deldosen").html(ajaxData);
      			   $("#Deldosen").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_makul.php", 
    			   type: "GET",
    			   data : {kd_mk: m,}, 
    			   success: function (ajaxData){
      			   $("#Delmk").html(ajaxData);
      			   $("#Delmk").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_prodi.php", 
    			   type: "GET",
    			   data : {id_prodi: m,}, 
    			   success: function (ajaxData){
      			   $("#Delprodi").html(ajaxData);
      			   $("#Delprodi").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_ruang.php", 
    			   type: "GET",
    			   data : {id_ruang: m,}, 
    			   success: function (ajaxData){
      			   $("#Delr").html(ajaxData);
      			   $("#Delr").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>
	<script type="text/javascript">
   $(".delete").click(function(e) { 
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "form/form_hapus_jadwal.php", 
    			   type: "GET",
    			   data : {id_jadwal: m,}, 
    			   success: function (ajaxData){
      			   $("#Deljadwal").html(ajaxData);
      			   $("#Deljadwal").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
	</script>