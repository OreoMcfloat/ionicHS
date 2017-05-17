<?php

// Inialize session
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomeShield</title>
	<link rel="shortcut icon" href="img/icon.png">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
header { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	    background: #2f3842;
    background: -moz-linear-gradient(top, #051d46 0%, #1c3e6e 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #051d46), color-stop(100%, #1c3e6e));
    background: -webkit-linear-gradient(top, #051d46 0%, #1c3e6e 100%);
    background: -o-linear-gradient(top, #051d46 0%, #1c3e6e 100%);
    background: -ms-linear-gradient(top, #051d46 0%, #1c3e6e 100%);
    background: linear-gradient(to bottom, #051d46 0%, #1c3e6e 100%);
    background-size: 150% 150%;filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}


</style>
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home Shield</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">What's Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Advantages</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#app">Get the Application</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="about">
        <div class="header-content">
            <div class="header-content-inner">
				<img src = "img/webLogoSub.png" class=""/>
                <hr class="primary">
				<h3> The mobile application that will keep you posted about the safety of your homes! </h3>
				<h4> With the internet of things, rest easy, you will be notified at all times! </h4>
                <a href="#services" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>



    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">You have never been this secured!</h2>
                    <hr class="primary">
					
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
					
                        <i class="fa fa-4x fa-eye wow bounceIn text-primary"></i>
                        <h3>Privacy</h3>
                        <p class="text-muted">Your know your rights and we respect your privacy at all times</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mobile wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Availability</h3>
                        <p class="text-muted">Our application is reliable, you can use it wherever, whenever you want</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lock wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Security</h3>
                        <p class="text-muted">Your data will not be distributed to other third parties </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Friendly Interface</h3>
                        <p class="text-muted">Our application is easy to use, learn to use it in minutes!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <aside class="bg-try">
        <div class="container text-center">
		            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="text-faded">Let's Get Down to Business!</h2>
                    <hr class="light">
                     <p class="text-faded">Because you are very special to us, these subjects' questions are hand-picked and prepared by yours truly. Enjoy, and hope you'd like it!</p>
                    <a href="#portfolio" class="btn btn-default btn-xl page-scroll">Get Started!</a>
                </div>
				
				     </div>
        </div>
  </aside>


	
    <section id="portfolio" class="bg-light-gray">
 

  	<div class="main">
		<div class="container">
				<div class="text-center">
					<h2>Are you sick of worrying for the safety your house?</h2>
					<h4>Then worry no more, here are some of the advantages of our IoT product</h4>	
					<br>
				</div>	
			<div class="main-grids">
						<hr class="primary">
				<div class="col-md-12 main-left">
					<p style="font-size: 20px;">The devices are connected online, you will never lose information as it syncs data with your mobile phone through the application.</p>	
					<hr class="primary">
					<p style="font-size: 20px;">No network connection? Not a problem! We are incorporating a texting service installed on our devices so that it can directly notify you when the internet's down.</p>	
					<hr class="primary">
					<p style="font-size: 20px;">We have also incorporated several news API for you to see, choose from different subscriptions for free!</p>
					<hr class="primary">					
					<p style="font-size: 20px;">Information stored on your mobile phones will be used for our data analytics to help you further understand the frequency of your activities!</p>	

				</div>
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</section>

    <section id="app" class="bg-light-gray">
 

  	<div class="main">
		<div class="container">
			<div class="main-grids">
						<hr class="primary">
				<div class="col-md-4 main-left">
				<img src = "img/Screenshot_1.png" class=""/>

				</div>
								<div class="col-md-4 main-left">
				<img src = "img/Screenshot_2.png" class=""/>

				</div>
								<div class="col-md-4 main-left">
				<img src = "img/Screenshot_3.png" class=""/>

				</div>
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</section>


    <aside class="bg-try">
        <div class="container text-center">
		            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="text-faded">Get the Application Now!</h2>
                    <hr class="light">
                     <p class="text-faded">Scan the QR Code below and get started!</p>
					 				<center><img src = "img/qrCode.png" class=""/></center><br>

                </div>

				</div>
        </div>
  </aside>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	
	  
	<!-- Contact Form JavaScript -->   
	<script src="js/jqBootstrapValidation.js"></script>  
	<script src="js/contact_me.js"></script>

	

</body>

</html>
