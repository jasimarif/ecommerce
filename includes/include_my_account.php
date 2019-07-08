<?php

if(isset($_SESSION['customer_email']) OR (isset($_SESSION['email'])))
                {
         echo "<li class='nav-item'>";
            
            echo "<a class='nav-link' href='my_accounts.php'> <i class='fas fa-user'></i> My Account </a>";
                
      echo "</li>";}


?>