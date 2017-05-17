
<?php
	//HTML --> VIEWERs
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}

require("../connection.php"); //connection


$id =$_REQUEST['owner_contactnumber']; //request the id from the index.php check line:39;



$status = "YES";
								
						
			
			
	{

		mysqli_query($con,"UPDATE notification_incident SET status ='$status' WHERE owner_contactnumber = '$id'") or die(mysql_error()); 

	   echo "<script>alert('A POLICE HAS BEEN DEPLOYED TO THE INCIDENT')</script>";

	   echo "<script>window.open('index.php','_self')</script>";
	}	
	

?>
