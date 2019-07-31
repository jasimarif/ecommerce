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
      <?php include("includes/WelcomeBar.php");   ?>
      <!--Product_area-->
        <div id="product_box"  >
          <div class="container"  >
            <div class="col-sm-12" >
              <div class="row" style="margin-left:3%; background-color:white">
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