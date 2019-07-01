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
             
             ?> - Total Price:<?php if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email']))){totalPrice();}?> </b> 