<?php

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


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
			<img class="title"src="assets/img/logoHS.png">
                </a>
            </div>

            <ul class="nav">
				<li>
                    <a href="index.php">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="statistics.php">
                        <i class="pe-7s-graph"></i>
                        <p>Statistics</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profiles</p>
                    </a>
                </li>
            </ul>
    	</div>
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
                                <h4 class="title">Application Users</h4>
                                <p class="category">Current Users of the Mobile Application</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Address</th>
                                    	<th>Contact Number</th>
                                    	<th>Birthdate</th>									
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>201410505</td>
                                        	<td>John Philip Canlas</td>
                                        	<td>Number 3 Leyva St. Mabayuan, Olongapo City - Philippines</td>
                                        	<td>09320158119</td>
                                        	<td>March 11, 1998</td>
                                        </tr>
                                        <tr>
                                        	<td>201410173</td>
                                        	<td>Prema Nakpil</td>
                                        	<td>42-18th St. EBB - Philippines</td>
                                        	<td>09126001094</td>
                                        	<td>October 2, 1997</td>
                                        </tr>
                                        <tr>
                                        	<td>201410506</td>
                                        	<td>Rupert Gutierrez</td>
                                        	<td>Number 6 Otero Ave. Mabayuan, Olongapo City - Philippines</td>
                                        	<td>09486972240</td>
                                        	<td>December 20, 1997</td>
                                        </tr>
                                        <tr>
                                        	<td>201410507</td>
                                        	<td>Julius Bordios</td>
                                        	<td>Blk 3, Gordon Heights, Olongapo City - Philippines</td>
                                        	<td>09081634246</td>
                                        	<td>July 4, 1998</td>
                                        </tr>
                                        <tr>
                                        	<td>201410508</td>
                                        	<td>Robert Gonzaga</td>
                                        	<td>Number 72-E Acacia St. Gordon Heights - Philippines</td>
                                        	<td>09096878872</td>
                                        	<td>April 16, 1977</td>
                                        </tr>
                                        <tr>
                                        	<td>201410509</td>
                                        	<td>John Paul De Guzman</td>
                                        	<td>East Tapinac - Philippines</td>
                                        	<td>09505728990</td>
                                        	<td>January 22, 1998</td>
                                        </tr>
                                    </tbody>
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
