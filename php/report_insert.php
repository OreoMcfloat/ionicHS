<?php
	require_once("db_con.php");

				
if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
	
		$sql = "SELECT * FROM notification_incident order by incident_id DESC ";
		$result = mysqli_query($conn, $sql);		
		$info=array();
		
		while($data = mysqli_fetch_assoc($result)){
			array_push($info, $data);
		}
		echo json_encode($info);
		
		
	$sql = "INSERT INTO notification_incident (owner_name,owner_address,owner_contactnumber, status)VALUES ('John Philip Canlas','3 Leyva St. Mabayuan Olongapo City','09320158119', 'Standby')";
	$result = mysqli_query($conn, $sql); //fetch

?>