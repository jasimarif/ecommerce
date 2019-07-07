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

      <div id="product_box"  class="" style="margin-top:60px;background-color:#F5F5F5" >
          <div class="container-flex">
            <div class="col-sm-12">
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
     
             echo "
                
                 
             <div class='col-sm-3 my-2 singleProduct' onmouseover='border()'>    
             <div class='card' style='width: 18rem;'>
             <a href='details.php?pro_id=$pro_id'><img class='card-img-top' src='admin_area/product_images/$pro_image' alt='$pro_title image'  width='180' height='200'></a>
             <div class='card-body'>
               <h5 class='card-title'>$pro_title</h5>
             </div>
             <div class='card-body text-center' style='margin-top:-45px; color:orange; font-size:20px;'>
               $pro_price
             </div>
             
             <div class='card-body' style='margin-top:-35px'>
               <a href='index.php?add_cart=$pro_id' class='card-link'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button></a>
             </div>
           </div>
           </div>
     
           <script>
             function border(){
                 var selector_box = Document.querySelector('.singleProduct');
                 selector_box.classList.add('border-image');
             }
           </script>
             
             ";
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