<?php

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
<footer>
			
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">About Us</h3>
							<p>
								<li><a href="about.php">Our Story</a></li>
								<li><a href="about.php">What we do</a></li>
								<li><a href="about.php">Customer Service</a></li>
								<li><a href="about.php">Culture</a></li>
							</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>S-25/ Times vally Squre, Mora Bhagal, Surat-395005</li>
								<li><i class="icon-phone"></i>+91 9624069890</li>
								<li><i class="icon-envelope"></i><a href="#">Fitnessload06@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.Fitness.com</a></li>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Drop us a line</h3>
							<form class="contact-form" method="POST">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" name="name" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Mob_No</label>
									<input type="text" name="mobno" class="form-control" id="email" placeholder="Mob_No">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea class="form-control" name="mass" id="message" rows="7" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</footer>