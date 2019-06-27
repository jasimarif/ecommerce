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
      <!--SideBar-->
      <?php include("includes/sidebar.php");   ?>          
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/welcome_guest.php");   ?>

        <div id="product_box"> 
        
            <h3 id="products"> Products </h3>
            
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

        echo "
           
            
            <div id=single_product> 
            <a href='details.php?pro_id=$pro_id' >  <p>  $pro_title  </p> </a>
            <a href='details.php?pro_id=$pro_id'> <img src='admin_area/product_images/$pro_image' width='180' height='200' /> </a>
            <p> PKR $pro_price </p>
            <a href='all_products.php?add_cart=$pro_id'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button> </a>     
                
            </div>
        
        ";
    }
           all_pro_cart();
        
            ?> 
        
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