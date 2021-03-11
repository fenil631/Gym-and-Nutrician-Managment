<?php
session_start();
include 'admincon.php';
?>
<html>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/13-132360_size-admin-user-icon-png.png" class="img-circle" width="80"></p>
          <h5 class="centered"><?php echo $_SESSION['username']; ?>
          
          </h5>
          <li class="mt">
            <a class="active" href="home.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="file_upload.php">Multiple File Upload</a></li>
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="addtrainer.php">Add Trainer</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tables</span>
              </a>
            <ul class="sub">
              <li><a href="User.php">User</a></li>
              <li><a href="logmintable.php">Admin</a></li>
              <li><a href="comment.php">Comment</a></li>
              <li><a href="tabtrainer.php">Trainer</a></li>
              <li><a href="tabmultifile.php">Multifile</a></li>
            </ul>
          </li>
          
          
          
        <!-- sidebar menu end-->
      </div>
    </aside>

  </html>