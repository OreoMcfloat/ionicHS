

<!DOCTYPE html>
<html>
	<head>
		<title>TESTING ON OFF</title>
		<script type="text/javascript" src="js/jquery.min.js"></script>
	</head>
	
	<body>
<!--		<form action="on.php">
			<button type="submit"> ON </button>
		</form>
		<form action="off.php">
			<button type="submit"> OFF</button>
		</form> -->
		<button type="submt" name="on" onclick="buttons()"><p id="status">ON</p></button>
		
	</body>
</html>

<script>
 document.getElementById("status").innerHTML = "On";
 
 function buttons(){
	 var a = document.getElementById("status").innerHTML;
	 
	 if(a == "On"){
		 document.getElementById("status").innerHTML = "Off";
		 $.ajax({
			 url: 'http://localhost/HomeShield/ons.php',
		 });
	 }
	 else{
		 document.getElementById("status").innerHTML = "On";
		 $.ajax({
			 url:  'http://localhost/HomeShield/off.php',
		 });
	 }
	 
 }
 
</script>


