<?php 
	require_once("connect.php"); //connect
	
	$devstat = $_GET['devstat'];
	$alertstat = $_GET['alertstat'];
	$alert = "LOW";
	$desc = "Home is Secure";
	$dates =date("F j,Y");
	
	//$sql = "SELECT * FROM homeshield"; //execute

		$sql = "INSERT INTO all_devicedata (deviceStatus,alertStatus,date)VALUES ('$devstat','$alertstat','$dates')";
		$sql1 = "INSERT INTO alert_incident (alert,description)VALUES ('$alert','$desc')";

	
	
	$result = mysqli_query($conn, $sql); //fetch
	$result1 = mysqli_query($conn, $sql1); //fetch
	//http://localhost/HSCoolTerm/addrecord.php?temp=14&d8t=%2712-23-2017%27
	
	
	
?>