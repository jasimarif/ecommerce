<div id="shopping_cart" > 
        <span style="float: right; line-height: 35px; font-size: 18px; " >  
 <?php       
       if(isset($_SESSION['email']))
                    {
                 echo "<b> Welcome </b>". $_SESSION['email'] . "<b> Your</b>" ;
             }
         elseif(isset($_SESSION['customer_email']))
         {
            echo "<b> Welcome </b>". $_SESSION['customer_email'] . "<b> Your</b>" ;
         }    
        else
             {
                   echo "<b> Welcome Guest </b>";
             }
             
             ?>
            
             <b style="color:yellow"> Shopping cart Total Items: <?php 

                        totalItems();
                
             
             ?> - Total Price:<?php totalPrice();?> </b> <a href="cart.php" style="color: blue" > Go to cart</a>
        </span>


</div> 