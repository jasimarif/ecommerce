<!doctype html>
<?php
include("functions/functions.php");  
session_start();
include("includes/include_body.php");

?>

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