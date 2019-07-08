<!doctype html>
<?php
session_start();
include("functions/functions.php");  
?>
<html lang="en">
  <head>
   <?php
   include("includes/Head.php");
   ?>
    <title>Tijarat</title>
      
    </head>
  <body>  
    
              
    <div id="contents">
      <!--NAVBAR SETTINGS-->       
      <?php include("includes/Navbar.php");   ?>



< 
<div class="container col-sm-3" id="body" style="padding-top:70px;">
  
    <form  method="post" action="customer_register.php" enctype="multipart/form-data" class="form-signin">
      
      <h1 class="h3 mb-3 font-weight-normal text-center">Create an account</h1>
      <label  class="sr-only"  >Customer name</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="c_name" required autofocus>
      <label for="inputEmail" class="sr-only" >Email</label>
      <input type="email" id="inputemail" class="form-control" placeholder="Email" name="c_email" required>
         <label for="inputpassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="c_pass" required>
        
         <label for="inputCountry" class="sr-only" >Country</label>
      <input type="text" id="inputCountry" class="form-control" placeholder="Country" name="c_country"required>
        <label for="inputCity" class="sr-only" >City</label>
      <input type="text" id="inputCity" class="form-control" placeholder="City" name="c_city"required>
        <label for="inputContact" class="sr-only" >Contact Number</label>
      <input type="text" id="inputContact" class="form-control" placeholder="Contact" name="c_contact" required>
        <label for="inputAddress" class="sr-only" >Address</label>
        <input type="text" id="inputAddress" class="form-control" placeholder="Address" name="c_address" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" style="margin-top:20px;">Create Account</button>
         
    </form>
  
    </div>

      </div>      
        
</div>
      </div>
        
    
     
        
      <?php
   include("includes/MainFooter.php");
   ?> 
     
 
    </body>

<?php

if (isset($_POST['register']))
{
   
    global $con;
    $ip=getIp();
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_pass=$_POST['c_pass'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    
     $insert_c="INSERT INTO `customers` (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values ('$ip','$c_name','$c_email',SHA('$c_pass'),'$c_country','$c_city','$c_contact','$c_address')";
    
   
    $check_user="SELECT * FROM customers WHERE customer_email='$c_email'";
    $run_check=mysqli_query($con,$check_user);
    if(mysqli_num_rows($run_check)>0)
    {
        echo "<script>alert('Useremail already exists')</script>";
    }
else
{
    $run_c=mysqli_query($con, $insert_c);
    if($run_c)
    {
        $sel_cart="SELECT * FROM cart where ip_add='$ip'";
        $run_cart=mysqli_query($con,$sel_cart);
        $check_cart= mysqli_num_rows($run_cart);
        if($check_cart==0)
        {
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('Account created succesfully! Now login with your account') </script>";
            echo"<script>window.open('customer_login.php','_self')</script>";
        }
        else
        {
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('Account created succesfully!') </script>";
            echo"<script>window.open('checkout.php','_self')</script>";
        }
    }
    }
   
    
    
    
}




?>

</html>

