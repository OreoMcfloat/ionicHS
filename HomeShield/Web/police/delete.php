
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



$result = mysqli_query($con,"select * from notification_incident where owner_contactnumber='$id'");
						$row  = mysqli_fetch_array($result);
						if (!$result) 
								{
								die("Error: Data not found..");
								}
								$name = $row['owner_name'];
								$id = $row['incident_id'];
								$address = $row['owner_address'];
								$contact = $row['owner_contactnumber'];
								$date = $row['incident_date'];

if(isset($submit))
{								
	$name = $_POST['oname'];
	$id = $_POST['iid'];
	$address = $_POST['oadd'];
	$contact = $_POST['ocont'];
	$date = $_POST['idate'];
	{
	   
	   mysqli_query($con,"INSERT INTO report_incident(incident_id,owner_name,owner_address,owner_contactnumber,incident_date) VALUES ('$id','$name','$address','$contact','$date')");
	   mysqli_query($con, "DELETE FROM notification_incident WHERE incident_id = '$id'");
	   echo "<script>alert('NOTIFICATION SUCCESSFULLY DELETED')</script>";

	   echo "<script>window.open('index.php','_self')</script>";
	}	
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>HomeShield</title>
	<link rel="shortcut icon" href="assets/img/icon.png">

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
                    <a class="navbar-brand" href="#">Home Shield</a>
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
                                <h4 class="title">DELETE NOTIFICATION</h4>
                                <!--<p class="category">Current Users of the Mobile Application</p>-->
							<form action="" method="post">
								<h4> Name: <?php echo $name ?></h4>
								<h4> Address: <?php echo $address ?></h4>
								<h4> Contact Number: <?php echo $contact ?></h4>
								
								<input type="hidden" name="oname" id="oname" value= "<?php echo $name ?>"> 
								<input type="hidden" name="iid" id="iid" value= "<?php echo $id ?>"> 
								<input type="hidden" name="oadd" id="oadd" value= "<?php echo $address ?>"> 
								<input type="hidden" name="ocont" id="ocont" value= "<?php echo $contact ?>"> 
								<input type="hidden" name="idate" id="idate" value= "<?php echo $date ?>"> 
								<button type="submit" class="btn btn-danger" id="buttons1" name="submit" id="submit" onClick="Submit()">DELETE</button>
							</form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</html>
