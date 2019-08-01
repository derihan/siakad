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
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>	
	<script>
		function ShowPassword()
{
	if(document.getElementById("mypass").value!="")
	{
		document.getElementById("mypass").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	} 
	if((document.getElementById("newpass").value=="" ) || (document.getElementById("newpass").value!=""))
	{
		document.getElementById("newpass").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	}
}

function HidePassword()
{
	if(document.getElementById("mypass").type == "text")
	{
		document.getElementById("mypass").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
	if(document.getElementById("newpass").type == "text")
	{
		document.getElementById("newpass").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
}
	</script>


