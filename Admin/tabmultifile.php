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
        <h3><i class="fa fa-angle-right"></i> multiple file</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                
                <thead>
                  <tr>
                    <th><i>#</i>ID</th>
                    <th><i class="fa fa-bullhorn"></i>Filename</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                  include 'admincon.php';
                  $selectquery = "select * from trainer";
                  $query = mysqli_query($conn,$selectquery);
                  $num = mysqli_num_rows($query);
                  while($res = mysqli_fetch_array($query) )
                  {

                  ?>
                  <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td class="hidden-phone"><?php echo $res['filename']; ?></td>
                    
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <?php
                }
                ?>
                  
                  
                </tbody>
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