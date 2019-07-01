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
   <link rel="stylesheet" type="text/css" href="style_details.css" media="all">
    <title>Tijarat</title>
      
    </head>
  <body>  
    <div class="wrapper"> 
<<<<<<< HEAD
        
        <nav id="sidebar"> 
            <div class="sidebar-header"> 
                <h3> Categories </h3>
            </div>
            <ul class="list-unstyled components">
                
                         
                <li class="active"> 
                     
                <a href="#mens_menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Men </a>
                            
                    <ul class="collapse list-unstyled"  id="mens_menu">
                          <?php  getTypes(); ?>
                        
                       
                    </ul>
                     </li>
                
                <li> 
                <a href="#womens_menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Women </a>
                            
                    <ul class="collapse list-unstyled"  id="womens_menu">
                        <?php getwomen(); ?>
                    
                    </ul>
                    </li>
                
                <li> 
                <a href="#"> Kids </a>
                </li>
                <li> 
                <a href="#"> New Arrival </a>
                </li>

                    
            </ul>
            
          
          </nav>
    
        <!--NAVBAR SETTINGS-->   
      <div id="contents">
          
          <nav class="navbar navbar-expand-xl navbar-light" id="navbar" style="background-color: white;">
              
             <div class="container-fluid"> 
                  
    <button type="button" id="sidebarCollapse" class="btn btn-light btn-sm"> 
        <i class="fas fa-align-justify">  </i> 

    </button>
        
        <a class="navbar-brand" href="index.php">TiJARAT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon-md"></span>
  </button>
                 
                 
<div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
         <a class="nav-link" href="index.php"> <i class="fas fa-home"></i> Home </a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="all_products.php"> All Products </a>
      </li>
        
        <li class="nav-item  ">
        <a class="nav-link" href="#"> <i class="fas fa-user"></i> My Account <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item ">
        <a class="nav-link" href="#"> <i class="fas fa-shopping-cart"></i>Shopping Cart <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <form method="get" action="results.php"  enctype="multipart/form-data" class="form-inline form-group my-2 my-lg-0">
        
      <input class="form-control mr-sm-2" name="user_query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" name="search" type="submit" id="submit">
     <i class="fas fa-search"></i>

    </button>
    </form>
         
      
  <form class="form-inline">
    <button class="btn btn-sm mx-4 btn-outline-success" type="button">Sign Up</button>
    <button class="btn btn-sm btn-outline-primary" type="button">Sign In</button>
  </form>

  </div>
 </div>                     
</nav>  

<div class="container-fluid" style="padding:15px; margin-top:-15px">
  <!--Welcome Bar-->
  <div class="row">
    <?php include("includes/welcome_guest.php"); ?>
  </div>
  <!--Product details from database call-->
  <?php include("includes/database_call_funtion_for_details_page.php");
=======
      <!--SideBar-->
      <?php include("includes/sidebar.php");   ?>          
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>

    <div class="container-fluid" style="padding:15px; margin-top:-15px">
      <!--Welcome Bar-->
    <div class="row">
      <?php include("includes/Welcome_guest.php"); ?>
    </div>
    <!--Product details from database call-->
    <?php include("includes/database_call_funtion_for_details_page.php");
>>>>>>> e35704c6e78eb011eb7ba83b8761cfeda4359a64
        $image_array = array($product_image,$product_image2,$product_image3);
        if(!empty($image_array[0])){  
  ?>
  <!--Product details Area-->
<div id="MainContent">
    <div class="container-flex col-sm-12">
      <div class="row m-1"><!--First row with main image box and thumbs-->
      <div class="col-sm-3.5"><!--Main Image starts-->
            <img class="zoom" id="MainImage" data-large="admin_area/product_images/<?php echo $image_array[0];?>" src="admin_area/product_images/<?php echo $image_array[0];?>" width="350" height="350"/>
        </div><!--Main Image ends-->
        <?php
         }
        ?>
        
        <div class="col-sm-1 m-1" style="margin: 0;" ><!--sidethumbs start-->
        <?php
        foreach($image_array as $k=>$v){
          if(!empty($v)){
        ?> 
          <div class="row m-1">
              <img id="thumbs" onmouseover="cssChange()" onmouseout="cssChange()" onclick="showImage('admin_area/product_images/<?php echo $v;?>')" src="admin_area/product_images/<?php echo $v?>" width="50" height="50"/>
           </div>
                
        <?php
           }
          }
        ?>
      </div><!--sidethumbs ends-->

        
        <div class="col-sm-4 box" id="boxItem"><!--Box Starts--> 
          
          <h4 class="text-left"><?php echo $product_title;?></h3>
          <div class="row no-gutters"><!--Star Rating-->
            <div class="col-sm-4">
                <span class="fa fa-star star-rating onchecked"></span>
                <span class="fa fa-star star-rating onchecked"></span>
                <span class="fa fa-star star-rating onchecked"></span>
                <span class="fa fa-star star-rating onchecked"></span>
                <span class="fa fa-star star-rating onchecked"></span>  
            </div>
            <div class="col-sm-4 ratings">
              Ratings
            </div>
            <div class="col-sm-4 ratings text-right">
               <span><i class="fas fa-heart onClick"></i></span>
            </div>
            <hr style="color:gray;">
          </div>
          <div class="container col-sm-12">
            <form method="POST" action="" ><!--buying box starts-->
              <div class="form-group row ">
                  <label  for="Price" class="col-sm-2 col-form-label text-left">Price:</label>
                  <div class="col-sm-9 text-left" id="Price" style="line-height:37px"><span style="color: orange; font-size:20px; ">Rs <?php echo $product_price;?></span> </div>
              </div>
              <div class="form-group row ">
                <label  for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-9 ">
                  <input type="text" value="1" id="quantity" name="qty" onkeyup="updatePrice()" size="3" style="padding: 2px;"> ea
                </div>
              </div>
  
              <div class="form-group row ">
                  <label  for="Sizes" class="col-sm-2 col-form-label">Sizes</label>
                  <div class="col-sm-10 ">
                    <select id="Sizes" name="sizes" size="1" style="height: 30px; padding:1px;" >
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                    </select>
                  </div>
              </div>
  
                
                <div class="form-group row text-center">
                  <button name="addcart" class="btn btn-primary" style="margin: auto;">
                      <a>
                          <i class="fas fa-shopping-cart"></i> <?php cart();  ?>Add to cart
                      </a>
                  </button>
                    
                </div>
  
            </form><!--buying box ends-->
            
          </div>
            
        </div><!--box ends-->
      </div><!--First row with main image box and thumbs-->
      <div class="row mt-4"><!--Second description row starts-->
        
        <div class="col-sm-10">
          <h4 > Product Description </h2>
            <div class="box col-sm-10"><?php echo $product_desc ;?></div>
        </div>
      </div><!--Second description row ends-->
      <div class="row"><!--third people row starts-->
        <div class="col-sm-10">
            People also Viewed
        </div>
      </div><!--third people row ends-->
      <hr>
      
      <div class="row no-gutters text-center"><!--Fourth view row starts-->
        <div class="col-sm-8.5">
          <div class="row"><!--iMAGES-->
            <?php 
             getPeopleAlsoView();
            ?>   
          </div>
        </div>
      </div><!--Fourth view row ends-->
      
    </div>
 </div>
     
</div>
        
        
            

        
    </div>     
        
      </div>      
        

        
    
      <?php
      include("includes/MainFooter.php");
      ?> 
      <script>
        function updatePrice(){
          var ajax= new XMLHttpRequest();
             ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200)
               
                 document.getElementById("Price").innerHTML=ajax.responseText;  
              };
        ajax.open('GET', 'ajax-details.php?value='+document.getElementById("quantity").value+'&product_price='+document.getElementById("Price").value ,true);
        ajax.send();
         
        }
      
      </script>
      <!--script for image selection-->
      <script>
        function showImage(imgPath){
          var currImg = document.getElementById("MainImage");
          currImg.src = imgPath;
        }
        function cssChange(){
          var image = document.getElementById("thumbs");
          image.classList.toggle('propchange');
        }
      </script>
      <script src = "Javascript/Stylish-Magnifying-Glass-Plugin-SergeLand-Image-Zoomer/zoomsl.min.js"></script>
      <script>
         $(function(){

          
          $(".zoom").imagezoomsl();

        });

      </script>
      
      
      
      
      
      
  
    
    </body>
</html>