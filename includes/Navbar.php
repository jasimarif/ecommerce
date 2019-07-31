<link rel="stylesheet" href="../style.css"> 


 <div class="login">

     <?php include("include_toggle_logout.php"); ?>
   
   
   </div>

<nav class="navbar navbar-expand-xl navbar-light" id="navbar" style="background-color: white;">
  
    <div class="container-fluid"> 
       
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
          
<!-----------dropdown menu -------------->
  <li class="nav-item">         
  <div class="dropdown">
    <a href="../cat.php" class="dropdown-toggle nav-link" id="cat_button" data-toggle="dropdown" data-display="static">
    Categories</a>
  
      
     <div class="dropdown-menu">
    <a class="dropdown-item dropdown-toggle " id="men_menu" data-toggle="dropdown">
    Men
  </a>  
      <ul class="active">
        <?php  getTypes(); ?>
    </ul>
    <a class="dropdown-item dropdown-toggle" id="women_menu" data-toggle="dropdown">
    Women
  </a>
  <ul class="womens_menu activew">
        <?php  getwomen(); ?>
    </ul>
    </div>


  </div>
</li>
</ul>
</div>
</div>
</nav>


     <form method="get" action="results.php"  enctype="multipart/form-data">

       <div class="search-box">  
       <input class="form-control" name="user_query" type="search" placeholder="Search" aria-label="Search">
       <button class="input-group-text" name="search" type="submit" id="submit">
      <i class="fa fa-search"></i>
      </button>
      </div>
     </form>
    

    <script type="text/javascript">
        
      

     document.querySelector('#cat_button').addEventListener('mouseover',function(){
       $('#cat_button').dropdown('toggle');
      });

         document.querySelector('.dropdown-menu a').addEventListener('mouseover',function(){
            document.querySelector('.dropdown-menu ul').classList.toggle('active');
       });

            document.querySelector('#women_menu').addEventListener('mouseover',function(){
            document.querySelector('.womens_menu').classList.toggle('activew');
       });



    </script>