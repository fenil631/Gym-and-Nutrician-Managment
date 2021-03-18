<?php
session_start();
include 'databaseconnection.php';


if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $mobno=$_POST['mobno'];
  $email=$_POST['email'];
  $mass=$_POST['mass'];

  $insertquery="INSERT INTO contact(name,mobno,email,massage) VALUES ('$name','$mobno','$email','$mass')";

  $res=mysqli_query($conn,$insertquery);
  if($res)
  {
    ?>
    <script>
      alert('Data Inserted successfully');
    </script>
    
    <?php

  }
  else
  {
    ?>
    <script>
      alert('Data not Inserted successfully');
    </script>
    <?php
  }
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
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
	
		<div class="fh5co-parallax" style="background-image: url(images/48-486428_about-contact-us-wallpaper-hd.jpg) ; " data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center"><b>Contact Us</b></h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-contact">
			<div class="container">
				<form action="#" method="POST">
					<div class="row">
						<div class="col-md-6 animate-box">
							<h3 class="section-title">Our Address</h3>
							<p>For all enquiries, please email us using below mailid or write in massage box and direct visite to the below address. </p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>S-25/ Times vally Squre, Mora Bhagal, Surat-395005 </li>
								<li><i class="icon-phone2"></i>+91 9624069890</li>
								<li><i class="icon-mail"></i><a href="#">Fitnessload06@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.Fitness.com</a></li>
							</ul>
						</div>
						<div class="col-md-6 animate-box">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="mobno" class="form-control" placeholder="Mob_No">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="mass" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<div id="map" class="fh5co-map"></div>
		<!-- END map -->
		
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

