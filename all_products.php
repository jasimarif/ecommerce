<!doctype html>
<?php
include("functions/functions.php");  
session_start();
?>
<html lang="en">
  <head>
   <?php
   include("includes/Head.php");
   ?>
    <title>Tijarat</title>
      
    </head>
  <body>  
    <div class="wrapper"> 
              
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/WelcomeBar.php");   ?>

      <div id="product_box"  class="" style="margin-top:60px;background-color:white" >
          <div class="container-flex">
             <div class="col-sm-12" style="margin-left:3%;">
              <div class="row">
                 
                    <?php 
                    $get_pro= "SELECT * FROM products";
         $run_pro= mysqli_query($con, $get_pro);
         while($row_pro=mysqli_fetch_array($run_pro))
         {
             $pro_id=$row_pro['product_id'];
             $pro_cat=$row_pro['product_cat'];
             $pro_type=$row_pro['product_type'];
             $pro_title=$row_pro['product_title'];
             $pro_price=$row_pro['product_price'];
             $pro_image=$row_pro['product_image'];
     
            include("includes/include_single_product.php");
         }
                all_pro_cart();
             
                 ?> 
                
              
                  
          
              </div>
            </div>  
          </div>  
             
            
        </div> 
            
             
<!--
  
</div> 
          <div id="pagination">
          <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#products">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
              </div>
      </div>      
        
</div>
                  
-->
    
<?php
   include("includes/MainFooter.php");
   ?> 
      
      
      
      
      
      
      
  
    
    </body>
</html>