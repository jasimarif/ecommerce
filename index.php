<!doctype html>
<?php
session_start();
include("functions/functions.php");  
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
      <!--SideBar-->
      <?php include("includes/sidebar.php");   ?>          
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/welcome_guest.php");   ?>
      <!--Product_area-->
        <div id="product_box"  class="" style="margin-top:60px;background-color:#F5F5F5" >
          <div class="container-flex">
            <div class="col-sm-12">
              <div class="row">
                  <?php 
                  getPro(); 
                  getMenPro();
                  getWomenPro();
                  cart();
                    
              
                  ?> 
          
              </div>
            </div>  
          </div>  
             
            
        </div> 
      </div>      
        
</div>
   <?php
   include("includes/MainFooter.php");
   ?>      
    </body>
    

</html>