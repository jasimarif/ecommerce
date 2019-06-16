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
      
       <link rel="icon" href="../../../../favicon.ico">
  
       <link rel="stylesheet" type="text/css" href="style.css" media="all">
       <title>Tijarat</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
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
          
          <nav class="navbar navbar-expand-xl navbar-light" style="background-color: white;">
              
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
    <a href="customer_register.php"> <button class="btn btn-sm mx-4 btn-outline-success" type="button">Sign Up</button></a>
      <a href="customer_login.php"> <button class="btn btn-sm btn-outline-primary" type="button">Sign In</button> </a>
  </form>

  </div>
   </div>                       
</nav>  
         <div id="shopping_cart"> 
         <span style="float: right; padding:5px; line-height: 40px; font-size: 18px;" >  
        
        Welcome guest! <b style="color:yellow"> Shopping cart Total Items:  - Total Price: </b> <a href="cart.php" style="color: blue" > Go to cart</a>
        
        
        </span>


         </div> 

   
<div class="container" id="body" style="padding-top:70px;">
  
    <form  method="post" action="customer_register.php" enctype="multipart/form-data" class="form-signin">
      
      <h1 class="h3 mb-3 font-weight-normal text-center">Create an account</h1>
      <label  class="sr-only"  >Customer name</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="c_name" required autofocus>
      <label for="inputEmail" class="sr-only" >Email</label>
      <input type="email" id="inputemail" class="form-control" placeholder="Email" name="c_email" required>
         <label for="inputpassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="c_pass" required>
        
         <label for="inputCountry" class="sr-only" >Country</label>
      <input type="text" id="inputCountry" class="form-control" placeholder="Country" name="c_country"required>
        <label for="inputCity" class="sr-only" >City</label>
      <input type="text" id="inputCity" class="form-control" placeholder="City" name="c_city"required>
        <label for="inputContact" class="sr-only" >Contact Number</label>
      <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="c_contact" required>
        <label for="inputAddress" class="sr-only" >Address</label>
        <input type="text" id="inputAddress" class="form-control" placeholder="Address" name="c_address" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" style="margin-top:20px;">Create Account</button>
         
    </form>
  
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

<?php

if (isset($_POST['register']))
{
   
    global $con;
    $ip=getIp();
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_pass=$_POST['c_pass'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    
     $insert_c="INSERT INTO `customers` (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
    
    $run_c=mysqli_query($con, $insert_c);
    if($run_c)
    {
        echo "<script> alert('Account added successfully')</script>";
    }
   
    
    
}




?>

</html>

