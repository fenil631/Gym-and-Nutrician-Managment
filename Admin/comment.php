
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
    include 'side.php';

   ?>
    
    
     <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Contact Detail</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                
                <thead>
                  <tr>
                    <th><i>#</i>ID</th>
                    <th><i class="fa fa-bullhorn"></i>Name</th>
                    <th>Mob_no</th>
                    <th class="hidden-phone">Email ID</th>
                    <th>Massage</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include 'admincon.php';
                  $selectquery = "select * from contact";
                  $query = mysqli_query($conn,$selectquery);
                  $num = mysqli_num_rows($query);
                  while($res = mysqli_fetch_array($query) )
                  {

                  ?>
                  <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td class="hidden-phone"><?php echo $res['name']; ?></td>
                    <td><?php echo $res['mobno']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['massage']; ?></td>
                    <td>
                      
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </table>
            </div>
            
          </div>
          
        </div>
        
      </section>
    </section>
    
  </section>
 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
 
  <script src="lib/common-scripts.js"></script>
  
  
</body>

</html>
