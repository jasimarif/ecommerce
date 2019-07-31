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


    <div id="product_box"> 
        
            <h3 id="products"> Products </h3>
            <form action="" method="post" enctype="multipart/form-data"> 
             <table align="center" width="700" bgcolor="white" border="1px solid black">
            <tr align="center">
                 <th> Remove </th> 
                <th> Products</th>
                <th> Quantity</th>
                <th>Total Price </th>
               
                <?php 
           getCart();  
                 ?>
                         
                
                 
                 <tr align="center"> 
                 <td><input type="submit" name="update_cart" value="Update cart"> </td>
                     <td> <input type="submit" name="continue" value="Continue Shopping"> </td>
                     <td><button> <a href="checkout.php"> Checkout </a> </button> </td>
                     
                 
                 </tr>
                 
            </table>
        </form>
        
            



           
        </div> 
      </div>      
        
</div>
        
<?php
   include("includes/MainFooter.php");
   ?>
    
    </body>
</html>