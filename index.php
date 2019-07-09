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
             
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/welcome_guest.php");   ?>
      <!--Product_area-->
        <div id="product_box"  class="" style="margin-top:60px;background-color:#F5F5F5" >
          <div class="container">
            <div class="col-sm-12" style="margin-left:3%;">
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