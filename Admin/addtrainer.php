<?php
include 'admincon.php';


if(isset($_POST['Save']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobno=$_POST['pno'];
  $email=$_POST['email'];
  $img=$_POST['select'];

  $insertquery="INSERT INTO trainer(firstname,lastname,phoneno,emailid,image) VALUES ('$fname','$lname',
  '$mobno','$email','$img')";

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
<html lang="en">

<head>
  <?php
  include 'head.php';
  ?>
</head>

<body>
  <section id="container">
 
    

    <?php
    include 'header.php';
    ?>
    <?php
    include 'side.php';
    ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Trainer Form</h3>
        
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Firstname </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="fname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lastname </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="lname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Phone_no</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="pno" type="pno" name="pno" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail </label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                  
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                      <input type="file" class="btn btn-theme02 btn-file" name="select" required="choose image"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="Save">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
          
        </div>
        
      </section>
      
    </section>
   
    
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
