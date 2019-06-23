<!doctype html>
<?php
include("functions/functions.php");  
session_start();

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
  
       <link rel="stylesheet" type="text/css" href="style.css" media="all">
     <title>Tijarat</title>
      
    </head>
  <body>
    
    
        
    
    <div class="wrapper"> 
        
        <nav id="sidebar"> 
            <div class="sidebar-header"> 
                <h3> My Account </h3>
            </div>
            <ul class="list-unstyled components">
                
                         
                <li class="active"> 
                     
                            
                    <ul class="list-unstyled"  id="mens_menu">
                        
                        <li> <a href="my_accounts.php?my_orders"> Orders</a> </li>
                        <li> <a href="my_accounts.php?edit_account"> Edit Account</a> </li>
                        <li> <a href="my_accounts.php?change_pass"> Change password</a> </li>
                        <li> <a href="my_accounts.php?delete_account"> Delete Account</a> </li>
                       
                    </ul>
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
        <a class="nav-link" href="cart.php"> <i class="fas fa-shopping-cart"></i>Shopping Cart <span class="sr-only">(current)</span></a>
      </li>
        
        
    </ul>
     
    <form method="get" action="results.php"  enctype="multipart/form-data" class="form-inline form-group my-2 my-lg-0">
        
      <input class="form-control mr-sm-2" name="user_query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn my-2 my-sm-0" name="search" type="submit" id="submit">
         <i class="fas fa-search"></i>

    </button>
    </form>
         
      
  <form class="form-inline">
    <?php
      if(!isset($_SESSION['customer_email']))
      {   
        echo "<button class='btn btn-sm mx-4 btn-outline-success' type='button'>Sign Up</button>";
        echo "<button class='btn btn-sm btn-outline-primary' type='button'>Sign In</button>";
      }
      else
      {
          echo "<a href='logout.php'> <button class='btn btn-sm btn-danger' type='button'>Logout</button></a>"; 
      }
        ?>
  </form>

  </div>
   </div>                       
</nav>  
         <div id="shopping_cart"> 
         <span style="float: right; padding:5px; line-height: 40px; font-size: 18px;" >  
            <?php
             if(isset($_SESSION['customer_email']))
             {
                 echo "<b> Welcome </b>". $_SESSION['customer_email'] . "<b> Your</b>" ;
             }
             else
             {
                   echo "<b> Welcome Guest </b>";
             }
             
             ?>
            
             <b style="color:yellow"> Shopping cart Total Items: <?php if(isset($_SESSION['customer_email']))
                                                                                        
                                                                                    totalItems();
             
             ?> - Total Price:<?php if(isset($_SESSION['customer_email'])){totalPrice();}?> </b> <a href="cart.php" style="color: blue" > Go to cart</a>
       
        
        </span>


         </div> 



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