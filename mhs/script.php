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
	