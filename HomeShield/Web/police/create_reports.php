<?php
include ("../connection.php");
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/Philippine-National-Police.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>HomeShield</title>
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
		<?php include 'nav.php'; ?>
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
                                <h4 class="title">CREATE REPORT FOR INCIDENT</h4>
                                <p class="category">Current Users of the Mobile Application</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                   <thead>
								<tr>
								            <th style="color:black;">INCIDENT ID</th>
											<th style="color:black;">NAME</th>
											<th style="color:black;">ADDRESS</th>
											<th style="color:black;">CONTACT #</th>
											<th style="color:black;">DATE OF INCIDENT</th>
											<th style="color:black;">CREATE REPORT</th>
											
										
										
									
								
								</tr>
								</thead>
											<?php
										
										if(isset($_GET['page'])){
											$page = $_GET['page'];
										}
										else{
											$page=1;
										}
										

										$start_index = $page * 10 - 10;
										
										$res = mysqli_query($con, "SELECT * FROM report_incident LIMIT {$start_index}, 10" );
										$output = "";
										
										
										
										while($row = mysqli_fetch_assoc($res))
										{
										
											
											
											$id = $row['owner_contactnumber'];
											
											$output .= "<tr>";
											$output .= "<td>";
											$output .= $row['incident_id'];
											$output .= "</td>";
											$output .= "<td>";
											$output .= $row['owner_name'];
											$output .= "</td>";
											$output .= "<td>";
											$output .= $row['owner_address'];
											$output .= "</td>";
											$output .= "<td>";
											$output .= $row['owner_contactnumber'];
											$output .= "</td>";
											$output .= "<td>";
											$output .= $row['incident_date'];
											$output .= "</td>";
											$output .= "<td>";
											$output .=  "<a href='createreport.php?owner_contactnumber=$id'><button class=\"btn btn-info\" onclick=\"edit();\"><span class=\"\"></span>Create Report</button></a>";
											$output .= "</td>";
										
										$output .= "</tr>";
										}
											
										$res = mysqli_query($con, "SELECT * FROM report_incident");
										$cou = mysqli_num_rows($res);
										$a = $cou/10;
										$a = ceil($a);
										echo "<br>"; echo "<br>"; echo ('Page:');

										for ($i = 1; $i <= $a; $i++) {
												  $url = "history_of_incidents.php?page=" . $i;
												  echo " | <a href=\"$url\">$i</a> | ";
										}	
										echo $output;

										?>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
