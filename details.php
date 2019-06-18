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




        <div id="shopping_cart" > 
          <span style="float: right; padding:5px; line-height: 40px; font-size: 18px;" >  
           Welcome guest! <b style="color:yellow"> Shopping cart Total Items - Total Price: </b> <a href="cart.php" style="color: blue" > Go to cart</a>
          </span>
        </div>
          
        <div class="container" style="margin-top: 50px;"> <!--container starts-->
            <div class="container"><!--CONTAINER STARTS-->
              <div class="col-md-9"><!--COL MD 9 STARTS-->
                  <div class="row" id="product_main"><!--ROW STARTS-->
                      <div class="col-sm-6"><!--COL SM6 STARTS-->
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"><!--carouselExampleControls STARTS-->
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="admin_area/product_images/black-kurta-white-salwar.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="admin_area/product_images/kurta-shalwar-navy-blue.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="admin_area/product_images/unstiched_fabric 1.jpg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!--carouselExampleControls ENDS-->
                      </div><!--COL SM6 ENDS-->
                      <div class="col-sm-6"><!--COL SM6 STARTS-->
                        <div class="box"><!--BOX STARTS-->
                          <h1 class="text-center">kurta-shalwar-navy-blue</h1>
                          <form action="details.php" method="POST" class="form-horizontal"><!--form starts-->
                            <div class="form-group row">
                              <label class="col-md-5 control-label">Product Quantity</label>
                              <div class="col-md-7">
                                <select name="product_qty" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 control-label">Product size</label>
                                <div class="col-md-7">
                                  <select name="product_qty" class="form-control">
                                    <option>Select Size</option>
                                    <option>small</option>
                                    <option>medium</option>
                                    <option>large</option>
                                  </select>
                                </div>
                              </div>
                              <p class="price">50 Rs.</p>
                              <p class="text-center buttons">
                                  <button class="btn btn-primary" type="submit">
                                      <i class="fas fa-shopping-cart"></i> Add to Cart
                                  </button>
                              </p>
                          </form><!--form ends-->
                        </div><!--BOX ENDS-->
                              <div class="row row-eq-height" id="thumbs"><!--row starts-->
                                <div class="col-4"><!--col xs 4 starts-->
                                  <a href="#" class="thumb">
                                    <img src="admin_area/product_images/black-kurta-white-salwar.jpg" class="img-fluid"/>
                                  </a>
                                </div><!--col xs 4 ends-->
                                <div class="col-4"><!--col xs 4 starts-->
                                  <a href="#" class="thumb">
                                    <img src="admin_area/product_images/kurta-shalwar-navy-blue.jpg" class="img-fluid"/>
                                  </a>
                                </div><!--col xs 4 ends-->
                                <div class="col-4"><!--col xs 4 starts-->
                                  <a href="#" class="thumb">
                                    <img src="admin_area/product_images/unstiched_fabric 1.jpg" class="img-fluid" />
                                  </a>
                                </div><!--col xs 4 ends-->
                              </div><!--row ends-->   

                      </div><!--COL SM6 ENDS-->
                    </div><!--ROW ENDS-->

                      <div class="box mt-5" id="details"><!--box starts-->
                        <p><!--p starts-->
                          <h4>Product details</h4>
                          <p>
                              Strewed assisted a since winningly crooked neglectful since and by pouting following wherever cumulative despite gosh alas ponderous and mannishly rabbit and frivolous kookaburra and where much placed that and hence met stuck.

                              Expectantly cardinal a demonstrably enthusiastic smugly past lustily hence rat watchful that dwelled so tardily much well
                          
                          </p>
                          <h4>Size</h4>
                          <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                          </ul>
                        </p><!--p ends-->
                        <hr>
                          
                      </div><!--box ends-->
                      <div class="row row-eq-height"><!--row same height row starts-->
                        <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts-->
                          <div class="box same-height headline"><!--box same-height headline starts-->
                            <h3 class="text-center">People also viewed these products</h3>
                          </div><!--box same-height headline ends-->
                        </div><!--col-md-3 col-sm-6 ends-->
                        <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                          <div class="product same-height"><!--product same-height starts-->
                            <a href="details.php">
                              <img src="admin_area/product_images/black-kurta-white-salwar.jpg" class="img-fluid">
                            </a>
                            <div class="text"> <!--text starts-->
                              <h3><a href="details.php">kurta-shalwar-navy-blue</a></h3>
                              <p class="price">50 Rs.</p>
                            </div><!--text ends-->

                            
                          </div><!--product same-height ends-->
                        </div><!--center-responsive col-md-3 col-sm-6 ends-->
                        <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                          <div class="product same-height"><!--product same-height starts-->
                            <a href="details.php">
                              <img src="admin_area/product_images/black-kurta-white-salwar.jpg" class="img-fluid">
                            </a>
                            <div class="text"> <!--text starts-->
                              <h3><a href="details.php">kurta-shalwar-navy-blue</a></h3>
                              <p class="price">50 Rs.</p>
                            </div><!--text ends-->

                            
                          </div><!--product same-height ends-->
                        </div><!--center-responsive col-md-3 col-sm-6 ends-->
                        <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                          <div class="product same-height"><!--product same-height starts-->
                            <a href="details.php">
                              <img src="admin_area/product_images/black-kurta-white-salwar.jpg" class="img-fluid">
                            </a>
                            <div class="text"> <!--text starts-->
                              <h3><a href="details.php">kurta-shalwar-navy-blue</a></h3>
                              <p class="price">50 Rs.</p>
                            </div><!--text ends-->

                            
                          </div><!--product same-height ends-->
                        </div><!--center-responsive col-md-3 col-sm-6 ends-->
                      </div><!--row same height row endsss-->

                    
                  </div><!--COL MD 9 STARTS-->
              </div><!--CONTAINER STARTS-->
                
          </div><!--container ends-->

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