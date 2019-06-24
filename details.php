<!doctype html>
<?php
include("functions/functions.php");
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
     
      <!--font awsome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      
          <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  
       <link rel="stylesheet" type="text/css" href="style_details.css" media="all">
     <title>Tijarat</title>
      
    </head>
  <body>
    
    
        
    
    <div class="wrapper"> 
        
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
    <?php include("includes/WelcomeBar.php"); ?>
  </div>
  <!--Product details Area-->
<div id="MainContent">
    <div class="container-flex">
      <div class="row "><!--First row with main image box and thumbs-->
        <div class="col-sm-1 ml-1 "><!--sidethumbs start-->
           <div class="row no-gutters">
              <img src="images/signup.jpg" class="img-fluid" alt="Responsive ismage"/>
           </div>
        </div><!--sidethumbs ends-->
        <div class="col-sm-5"><!--Main Image starts-->
            <img src="images/signup.jpg" class="img-fluid" alt="Responsive ismage"/>
        </div><!--Main Image ends-->
        <div class="col-sm-4" id="box"><!--Box Starts--> 
          
          <h3 class="text-center">Title</h3>
          
          <form method="POST" action="" ><!--buying box starts-->
            
            <div class="form-group row ">
              <label  for="quantity" class="col-sm-2 col-form-label">Quantity</label>
              <div class="col-sm-9 ">
                <input type="text" id="quantity" name="qty" size="3" style="padding: 2px;"> ea
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

              <div class="form-group row ">
                  <label  for="Price" class="col-sm-2 col-form-label">Price:</label>
                  <div class="col-sm-9 " id="Price" style="line-height:35px">50 Rs.</div>
              </div>
              <div class="form-group row text-center">
                <button class="btn btn-primary" style="margin: auto;">
                    <a>
                        <i class="fas fa-shopping-cart"></i>Add to cart
                    </a>
                </button>
                  
              </div>

          </form><!--buying box ends-->
            
        </div><!--box ends-->
      </div><!--First row with main image box and thumbs-->
    </div>
 </div>
     
</div>
        
        
            

        
    </div>     
        
      </div>      
        

        
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

      <script>   
      
      $(document).ready(function(){
          
            $('#sidebarCollapse').on('click',function(){
                
                $('#sidebar').toggleClass('active')
                
                
            }); 
          
      });
    
      
      </script>
      
      
      
      
      
      
      
  
    
    </body>
</html>