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
        <h3><i class="fa fa-angle-right"></i> Admin Table</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                
                <thead>
                  <tr>
                    <th><i>#</i> Admin ID</th>
                    <th><i class="fa fa-bullhorn"></i>Admin Name</th>
                    <th> Password</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Company Ltd</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    
                    <td><span class="label label-info label-mini">Due</span></td>
                    <td>
                      
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      
                    </td>
                  </tr>
                  
                  
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
