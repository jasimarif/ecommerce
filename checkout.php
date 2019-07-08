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
        <div id="product_box"> 
        
            <?php
            
            if(!isset($_SESSION['customer_email']))
            if(!isset($_SESSION['email']))
        {
            
            echo "<script>window.open('customer_login.php','_self')</script>";
        }
    else
    {
        include("payment.php");
    }
    
    
    
        ?>
        
        </div> 
      </div>      
        
</div>
        
<?php
   include("includes/MainFooter.php");
   ?>  
      
      
      
      
      
  
    
    </body>
</html>