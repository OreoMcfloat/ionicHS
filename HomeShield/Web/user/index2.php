<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}
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
                        <a class="page-scroll" href="#portfolio">Subjects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="mail/contact.php">Contact Us</a>
                    </li>
					<li>
                        <a class="page-scroll" href="Subjects/leaderboard.php">LEADERBOARDS</a>
                    </li>
					<li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
				<img src = "img/webLogoSub.png" /><br>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>

                <hr>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Are You Ready For This?</h2>
                    <hr class="light">
                     <p class="text-faded">Starting this app can help you better understand the fields of different subject matter along with different difficulties! Just choose your subject of choice and start going, no strings attached!</p>
                    <a href="#services" class="btn btn-default btn-xl page-scroll">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What's Up!</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Updated Data</h3>
                        <p class="text-muted">Our questions' database are regularly updated so you will never get bored.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Ready to Play</h3>
                        <p class="text-muted">You can use this application as is, without hassle, without any strings attached!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Contact the Administrators</h3>
                        <p class="text-muted">We want to keep in touch with you always everywhere, anytime!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Friendly User Interface</h3>
                        <p class="text-muted">We want to deliver a seamless website from the bottom of our codes!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <aside class="bg-dark">
        <div class="container text-center">
		            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get Down to Business!</h2>
                    <hr class="light">
                     <p class="text-faded">Because you are very special to us, these subjects' questions are hand-picked and prepared by yours truly. Enjoy, and hope you'd like it!</p>
                    <a href="#portfolio" class="btn btn-default btn-xl page-scroll">Get Started!</a>
                </div>
				     </div>
        </div>
  </aside>


	
    <section id="portfolio" class="bg-light-gray">
 
<div class="container" id="pics">
<div class="row">
                
<div class="col-md-3 col-sm-3 portfolio-item">
 
                    <a href="Subjects/General_Science_Category.php" class="portfolio-box">
                        <img src="img/portfolio/a.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
										<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>

                  
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">General Science</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>

</div>
                   
<div class="col-md-3 col-sm-3 portfolio-item">
                   
<a href="Subjects/General_Trivia_Category.php" class="portfolio-box">
                        <img src="img/portfolio/b.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">General Trivia</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>
                
</div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
                    
<a href="Subjects/World_History_Category.php" class="portfolio-box">
                        <img src="img/portfolio/c.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
									<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">World History</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div></div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
                    
<a href="Subjects/Chemistry_Category.php" class="portfolio-box">
                        <img src="img/portfolio/d.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
								<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Chemistry</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>

</div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
                    
<a href="Subjects/Physics_Category.php" class="portfolio-box">
                        <img src="img/portfolio/e.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
								<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Physics</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div></div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
                    
<a href="Subjects/Biology_Category.php" class="portfolio-box">
                        <img src="img/portfolio/f.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Biology</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div>
</div>
<div class="container">
<div class="row">
                
<div class="col-md-3 col-sm-3 portfolio-item">
 
<a href="Subjects/English_Category.php" class="portfolio-box">
                        <img src="img/portfolio/g.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>

                  
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">English</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>

</div>
                   
<div class="col-md-3 col-sm-3 portfolio-item">
                   
<a href="Subjects/Technology_Category.php" class="portfolio-box">
                        <img src="img/portfolio/h.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                             <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Technology</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>
                
</div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
  <a href="Subjects/Geometry_Category.php" class="portfolio-box">                  
                        <img src="img/portfolio/i.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Geometry</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div></div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
       <a href="Subjects/Statistics_Category.php" class="portfolio-box">             
	   
                        <img src="img/portfolio/j.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
							<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Statistics</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p>
</div>

</div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
            <a href="Subjects/Algebra_Category.php" class="portfolio-box">        
                        <img src="img/portfolio/k.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
						<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Algebra</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div></div>
                
<div class="col-md-3 col-sm-3 portfolio-item">
           <a href="Subjects/Geology_Category.php" class="portfolio-box">         
                        <img src="img/portfolio/l.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
						<p> PLAY NOW !</p>

                            </div>
                        </div>
                    </a>
                    
<div class="portfolio-caption">
                        
<h4 style="text-align:center;">Geology</h4>
                        
<p class="text-muted" style="text-align:center;">Take The Quiz Now!</p></div>
</div>
</section>	


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
