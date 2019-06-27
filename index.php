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
        <div id="product_box"> 
        
            <h3 id="products"> Products </h3>
            
             <?php getPro(); 
            
                getMenPro();
                getWomenPro();
                cart();
                  
            
            ?> 
        
        </div> 
      </div>      
        
</div>
   <?php
   include("includes/MainFooter.php");
   ?>      
    </body>
</html>