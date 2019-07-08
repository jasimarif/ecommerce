<?php

if(!isset($_SESSION['customer_email']))
          if(!isset($_SESSION['email']))
          
      {   
        echo "<a href='customer_register.php'>  <button class='btn btn-sm mx-4 btn-outline-success' type='button'>Sign Up</button> </a>";
        echo " <a href='customer_login.php'> <button class='btn btn-sm btn-outline-primary' type='button'>Sign In</button></a>";
      }
      else
      {
          echo "<a href='logout.php'> <button class='btn btn-sm btn-danger' type='button'>Logout</button></a>"; 
      }

?>