<?php 
	require_once("connect.php"); //connect
	
	$alert = "Intruder Alert!";
	$alert1 = "HIGH";
	$desc = "Someone Open The Door!";
	
	
	//$sql = "SELECT * FROM homeshield"; //execute

		
		$sql = "INSERT INTO alert_incident (alert,description)VALUES ('$alert1','$desc')";
		$sql2 = "INSERT INTO alert_historyincident (alert,description)VALUES ('$alert','$desc')";

	
	
	$result = mysqli_query($conn, $sql); //fetch
	$result2 = mysqli_query($conn, $sql2); //fetch
	//http://localhost/HSCoolTerm/addrecord.php?temp=14&d8t=%2712-23-2017%27
	
	
	
?>