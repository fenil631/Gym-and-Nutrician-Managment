<?php
session_start();
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
		
		
		<div class="fh5co-parallax" style="background-image: url(images/gym-trainer-1280x720.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center"><b>Trainers</b></h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-team-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Meet Our Trainers</h2>
							
						</div>
					</div>
				</div>
				<?php 
                  include 'databaseconnection.php';
                  $selectquery = "select * from trainer";
                  $query = mysqli_query($conn,$selectquery);
                  $num = mysqli_num_rows($query);
                  while($res = mysqli_fetch_array($query) )
                  {

                  ?>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image:url(images/<?php echo $res['image']; ?>) ;">
							<div class="overlay-section">
								<div class="desc">
									<h3><?php echo $res['firstname']; ?> <?php echo $res['lastname']; ?></h3>
									<span>Body Trainer</span>
									<p><?php echo $res['phoneno']; ?></p>
									<p><?php echo $res['emailid']; ?></p>
									<p class="fh5co-social-icons">
										
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
						
				</div>
				<?php
                }
                ?>
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

