<?php
session_start();
include '../../../fitness/databaseconnection.php';


if(isset($_POST['signup_submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobno=$_POST['num'];
  $password=$_POST['password2'];

  $insertquery="INSERT INTO user(username,email,password,repassword) VALUES ('$username','$email','$mobno','$password')";

  $res=mysqli_query($conn,$insertquery);
  if($res)
  {
    ?>
    <script>
      alert('Data Inserted successfully');
    </script>
    <?php
      header('location:../login.php');
    ?>
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
<html>
<head>
  <title>Fitness</title>
  </head>
<link rel="stylesheet" href="css/signup.css">

<div id="login-box">
  <form action="" method="POST">
  <div class="right">

    <h1>Sign up</h1>
    
    <input type="text" name="username" placeholder="Username" required />
    <input type="text" name="email" placeholder="E-mail" required/>
    <input type="text" name="num" placeholder="Mobno" required />
    <input type="password" name="password2" placeholder="password" required />
    
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>
</form>
  <div class="left">
    <img src="img/5ab6a7618fac874cc954b3b87ba4b5f9.png" width="250px" height="330px">
  </div>

</div>
</html>