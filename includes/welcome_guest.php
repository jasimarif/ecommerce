 

<div id="shopping_cart" > 
<span style="float: right; padding:5px; line-height: 40px; font-size: 18px;" >
        <?php   
             if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email'])))
             {
                 echo "<b> Welcome </b>". $_SESSION['customer_email'] . "<b> Your</b>" ;
             }
             else
             {
                   echo "<b> Welcome Guest </b>";
             }
             
             ?>
 <b style="color:yellow"> Shopping cart Total Items: <?php 
                 if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email']))){
                    totalItems();
                 }       
             
             ?> - Total Price:<?php if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email']))){totalPrice();}?></b> <a href="cart.php" style="color: blue" > Go to cart</a>
        
        
        </span>


</div> 
            
            