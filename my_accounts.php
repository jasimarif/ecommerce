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
        
        <nav id="sidebar"> 
            <div class="sidebar-header"> 
                <h3> My Account </h3>
            </div>
          
                    <ul>
                        
                        <li> <a href="my_accounts.php?my_orders"> Orders</a> </li>
                        <li> <a href="my_accounts.php?edit_account"> Edit Account</a> </li>
                        <li> <a href="my_accounts.php?change_pass"> Change password</a> </li>
                       
                       
                    </ul>
                     </li>
          
            
          
          </nav>
    
        <!--NAVBAR SETTINGS-->   
      <div id="contents">
          
      <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/welcome_guest.php");   ?>  
        

        <div id="product_box"> 
        
            <h1> Welcome </h1>
            <?php
            if(isset($_GET['edit_account']))
            {
                include("edit_account.php");
            }
             if(isset($_GET['change_pass']))
            {
                include("change_pass.php");
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