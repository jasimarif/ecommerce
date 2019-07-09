<link rel="stylesheet" href="../style.css"> 
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
         
        <?php include("include_my_account.php");?>
      
       <li class="nav-item ">
         <a class="nav-link" href="cart.php"> <i class="fas fa-shopping-cart"></i>Shopping Cart <span class="sr-only">(current)</span></a>
       </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tag" aria-hidden="true"></i>
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
                <a href="#mens_menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">  Men </a>
                            
                    <ul class="collapse"  id="mens_menu">
                          <?php  getTypes(); ?>
                                           
                    </ul>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     </ul>
      <!--<ul class="list-unstyled components">
                
                         
                <li class="active"> 
                     
              
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
            -->
  
        
   
            
 

 
     <form method="get" action="results.php"  enctype="multipart/form-data" class="form-inline form-group my-2 my-lg-0">
         
       <input class="form-control mr-sm-2" name="user_query" type="search" placeholder="Search" aria-label="Search">
       <button class="btn my-2 my-sm-0" name="search" type="submit" id="submit">
      <i class="fas fa-search"></i>
 
     </button>
     </form>
          
       
   <form class="form-inline">
     <?php include("include_toggle_logout.php"); ?>
   </form>
 
   </div>
  </div>                     
 </nav> 