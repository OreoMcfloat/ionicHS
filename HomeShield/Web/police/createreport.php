
<?php
	//HTML --> VIEWERs
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}

require("../connection.php"); //connection
extract($_POST);

$id =$_REQUEST['owner_contactnumber']; //request the id from the index.php check line:39;




if(isset($submit))
{								
	$report = $_POST['report'];
	
	{
	   
	   mysqli_query($con,"UPDATE report_incident SET incident_report ='$report' WHERE owner_contactnumber = '$id'") or die(mysql_error()); 
		
	   echo "<script>alert('REPORT SUCCESSFULLY SAVED')</script>";

	   echo "<script>window.open('create_reports.php','_self')</script>";
	}	
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/Philippine-National-Police.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>PNP</title>
	<link rel="shortcut icon" href="assets/img/Philippine-National-Police.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="darkHS" data-image="assets/img/sidebarTry1.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
		
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">PHILIPPINE NATIONAL POLICE</a>
                </div>
                <div class="collapse navbar-collapse">
				

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>



			
			        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">CREATE REPORT</h4>
                                <!--<p class="category">Current Users of the Mobile Application</p>-->
							<form action="" method="post">
								<textarea rows="23" name="report"cols="135"></textarea>
								
								<button type="submit" class="btn btn-info" id="buttons1" name="submit" id="submit" onClick="Submit()">SAVE REPORT</button>
							</form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
