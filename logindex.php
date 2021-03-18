<?php
session_start();
include 'databaseconnection.php';
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}

?>
<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fitness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header>
				<?php
				include 'logheader.php';
				?>

			</header>		
		</div>
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/hLsgKJ.jpg); width:100%; height:100%;">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<p><span>Success usually  <i class="icon-heart3"></i> comes to those who are too <a href="http://freehtml5.co" class="fh5co-site-name">busy</a> to be looking for it</span></p>
								<span><a class="btn btn-primary" >START YOUR JOURNEY</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-programs-section">
			<center><iframe src="https://www.youtube.com/embed/8I9EeV0ORF8" width="1100" height="500"></iframe></center>
			
		</div>
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Class Schedule</h2>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="sunday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-swimming.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Swimming</h3>
										
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										
									</div>
								</div>
							</div>
							

							
							
						</div>

						
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Our Programs</h2>
							<p>We are provid some programs for you here we are trying to give you the best training. </p>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-dumbell.svg" alt="Cycling">
							<h3>Body Combat</h3>
							<p align="left">I believe that the issue of mental health services for our troops deploying or returning from body combat.</p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-yoga.svg" alt="">
							<h3>Yoga Programs</h3>
							<p align="left">Yoga does not just change the way we see things, it transforms the person who sees. </p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-boxing.svg" alt="Cycling">
							<h3>Boxing Fitness</h3>
							<p align="left">I hated every minute of training, but I said, ‘Don’t quit. Suffer now and live the rest of your life as a champion’.</p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-cycling.svg" alt="">
							<h3>Cycling Program</h3>
							<p align="left">Life is like riding a bicycle. To keep your balance you must keep moving. </p>
							
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-swimming.svg" alt="">
							<h3>Swimming Program</h3>
							<p align="left">The harder you work, the harder it is to surrender. </p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-massage.svg" alt="">
							<h3>Massage</h3>
							<p align="left">Massage is not just a luxury. It’s a way to a healthier, happier life. </p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Pricing Plan</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">₹</sup>2000<small>/month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">₹</sup>4000<small>3 month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box ">
							<h2 class="pricing-plan">Pro</h2>
							<div class="price"><sup class="currency">₹</sup>6000<small>6 month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box popular">
							<h2 class="pricing-plan">Primium</h2>
							<div class="price"><sup class="currency">₹</sup>8000<small>/Yearly</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		
		
		<footer>
			
		<?php
		include 'footer.php';
		?>		
		</footer>
	

	</div>
	

	</div>
	


	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	
	<script src="js/main.js"></script>

	</body>
</html>

