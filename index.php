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
      
     
          <div class="container">
            
              <div class="row">
               
               <?php getMenPro() ?> 
               <?php getWomenPro() ?>  
                </div>
              </div>
          
<!--------------------carousel slider ----------------------->
                <div class="slider" > 
               <div id="slider" class="carousel slide carousel-fade" data-ride="carousel" >
                    
                      <div class="carousel-inner" >
                        <div class="carousel-item active">
                        <img src="images/duppatas.jpg" class="d-block w-100" >
                      </div>
                      <div class="carousel-item">
                        <img src="images/sunglasses.jpg" class="d-block w-100" >
                      </div>
                      <div class="carousel-item">
                        <img src="images/shoes.jpg" class="d-block w-100" >
                      </div>
                      <div class="carousel-item">
                        <img src="images/cloth.jpg" class="d-block w-100" >
                      </div>
                    </div>
                      <ol class="carousel-indicators">
                      <li data-target="#slider" data-slide-to="0" class="active"></li>
                      <li data-target="#slider" data-slide-to="1"></li>
                      <li data-target="#slider" data-slide-to="2"></li>
                      <li data-target="#slider" data-slide-to="3"></li>
                    </ol>
                  </div>
          
                  </div>

<!------------feautured categories------------------>

<section class="featured-categories">

  <div class="container-fluid"> 
    <div class="title-box" style="text-align: center;">
      <h2> Categories </h2>
     
    </div>
    

      <div class="row">
        <div class="col-md-4 promen">
          <a href="all_products_men.php"> <img src="images/men-categories.jpg"></a>

          <div class="col-md-4 overlay-left">
            <h1> Men</h1>
        </div>
      </div>
        <div class="col-md-4 promen">
         <a href="all_products_women.php"> <img src="images/women-categories.jpg"></a>
         <div class="col-md-4 overlay-left">
            <h1> Women</h1>
        </div>

        </div>
        <div class="col-md-4 promen" >
          <img src="images/kids-categories.jpg" height="70%"> 
          <div class="col-md-4 overlay-left">
            <h1> Kids </h1>
        </div>
        </div>
        
      </div>
   
  </div>
  
</section>
<!------------------ ON SALE PRODUCTS ------------->
<section class="on-sale">
  <div class="container-fluid">
    <div class="onsale-title-box">
      <h2> On Sale </h2>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="product-top">
          <img src="images/jeans.jpg" height="300px" width="300px">
          <div class="overlay-right">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
            <i class="fas fa-eye"> </i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wish list">
            <i class="fa fa-heart"> </i> 
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
            <i class="fa fa-shopping-cart"> </i> 
            </button>
          </div>
          <div class="product-bottom text-center">
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star-half"></i>
          <h3>Narrow Blue Jeans</h3>
          <h5> PKR 1200</h5> 

          </div>

        </div>
        

      </div>
      


    </div> 


  </div>
  



</section>




                </div>
       
</div>
   <?php
   include("includes/MainFooter.php");
   ?>      
    </body>
    

</html>