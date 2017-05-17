<?php
	require_once("php_serial.class.php");
	$id=$_GET['id'];
	if($id == "on"){
	$serial = new phpSerial();
	$serial -> deviceSet("COM3");
	
	$serial -> confBaudRate(9600);
	$serial -> confParity("none");
	$serial -> confCharacterLength(8);
	$serial -> confStopBits(1);
	$serial -> confFlowControl("none");
	
	$serial -> deviceOpen();
	for($i = 0; $i<=5; $i++){
		$serial -> sendMessage(1);
		
	}
	$serial -> deviceClose();
	}else if($id == "off"){
	$serial = new phpSerial();
	$serial -> deviceSet("COM3");
	
	$serial -> confBaudRate(9600);
	$serial -> deviceOpen();
	for($i = 0; $i<=5; $i++){
		$serial -> sendMessage(0);
		
	}
	$serial -> deviceClose();

	}


?>