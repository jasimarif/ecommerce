<!doctype html>
<?php
include("functions/functions.php");  
session_start();
include("includes/include_body.php");

?>




        <div id="product_box"> 
        
            <h3 id="products"> Products </h3>
            
             <?php 
               $get_pro= "SELECT * FROM products";
    $run_pro= mysqli_query($con, $get_pro);
    while($row_pro=mysqli_fetch_array($run_pro))
    {
        $pro_id=$row_pro['product_id'];
        $pro_cat=$row_pro['product_cat'];
        $pro_type=$row_pro['product_type'];
        $pro_title=$row_pro['product_title'];
        $pro_price=$row_pro['product_price'];
        $pro_image=$row_pro['product_image'];

        echo "
           
            
            <div id=single_product> 
            <a href='details.php?pro_id=$pro_id' >  <p>  $pro_title  </p> </a>
            <a href='details.php?pro_id=$pro_id'> <img src='admin_area/product_images/$pro_image' width='180' height='200' /> </a>
            <p> PKR $pro_price </p>
            <a href='all_products.php?add_cart=$pro_id'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button> </a>     
                
            </div>
        
        ";
    }
           all_pro_cart();
        
            ?> 
        
<!--
  
</div> 
          <div id="pagination">
          <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#products">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
              </div>
      </div>      
        
</div>
                  
-->
    
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