<?php
	if(isset($_GET['action'])){
	require_once("php_serial.class.php");


	$serial = new phpSerial();
	$serial -> deviceSet("COM3");
	$serial -> deviceOpen();
	
	if($_GET['action'] == "on"){
		$serial->sendMessage("1\r");
	}
	else if ($_GET['action'] == "off"){
		$serial->sendMessage("0\r");
	}
	$serial -> deviceClose();
	
	}
	


?>