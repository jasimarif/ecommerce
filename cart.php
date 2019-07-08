<!doctype html>
<?php
include("functions/functions.php");  
session_start();
<<<<<<< HEAD

=======
>>>>>>> DetailsPage
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
        
        
        <?php
        if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email'])))
                {
         echo "<li class='nav-item'>";
            
            echo "<a class='nav-link' href='my_accounts.php'> <i class='fas fa-user'></i> My Account </a>";
                
      echo "</li>";}
          ?>
     
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
          if(!isset($_SESSION['email']))
          
      {   
        echo "<button class='btn btn-sm mx-4 btn-outline-success' type='button'>Sign Up</button>";
        echo " <a href='customer_login.php'> <button class='btn btn-sm btn-outline-primary' type='button'>Sign In</button></a>";
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
             if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email'])))
             {
                 echo "<b> Welcome </b>". $_SESSION['email'] . "<b> Your</b>" ;
             }
             else
             {
                   echo "<b> Welcome Guest </b>";
             }
             
             ?>
            
             <b style="color:yellow"> Shopping cart Total Items: <?php 
                 if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email'])))
                                                                                        
                                                                                    totalItems();
             
             ?> - Total Price:<?php if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email']))){totalPrice();}?> </b> <a href="cart.php" style="color: blue" > Go to cart</a>
       
        
        </span>


         </div> 




        <div id="product_box"> 
=======
      <!--SideBar-->
      <?php include("includes/sidebar.php");   ?>          
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>
      <!--WelcomeBar-->
      <?php include("includes/welcome_guest.php");   ?>


    <div id="product_box"> 
>>>>>>> DetailsPage
        
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