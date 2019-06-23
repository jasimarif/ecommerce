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
        
            <h3 id="products"> Products </h3>
            <form action="" method="post" enctype="multipart/form-data"> 
             <table align="center" width="700" bgcolor="white" border="1px solid black">
            <tr align="center">
                 <th> Remove </th> 
                <th> Products</th>
                <th> Quantity</th>
                <th>Total Price </th>
               
                <?php 
            $total=0;
            global $con;
            $ip=getIp();
            $sel_price= "SELECT * FROM cart where ip_add='$ip'";
            $run_price=mysqli_query($con, $sel_price);
            while($p_price=mysqli_fetch_array($run_price))
            {
                $pro_id=$p_price['p_id'];
                $pro_query= "SELECT * FROM products WHERE product_id='$pro_id'";
                $run_query=mysqli_query($con,$pro_query);
                while($pp_price=mysqli_fetch_array($run_query))
                {
                    $product_price=array($pp_price['product_price']);
                    $product_title=$pp_price['product_title'];
                    $product_image=$pp_price['product_image'];
                    $single_price=$pp_price['product_price'];
                    $sum=array_sum($product_price);
                    $total+=$sum;

                        ?>
                 
                 </tr>
                 
                 <tr>
                    <td> <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"> </td>
                    <td > <b> <?php echo $product_title;?> </b><br>   
                        <img src="admin_area/product_images/<?php echo $product_image; ?>" width="100" height="100"/>                      
                     </td>
                    <td> <input type="text" size="4" name="qty"> </td>
                  
                    <td> <?php echo $single_price ?></td>
                 
                 
                 </tr>
            
            <?php 
                } }  
                 ?>
                         
                 <tr> 
                 
                 <td colspan="3"> </td>
                <td> <b> Total: <?php echo $total ?></b></td>
                 </tr>
                 
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