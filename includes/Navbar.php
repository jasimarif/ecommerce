 
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
         <a class="nav-link" href="my_accounts.php"> <i class="fas fa-user"></i> My Account <span class="sr-only">(current)</span></a>
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
     <?php include("include_toggle_logout.php"); ?>
   </form>
 
   </div>
  </div>                     
 </nav> 