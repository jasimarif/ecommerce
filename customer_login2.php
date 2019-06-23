<?php
include("functions/connection.php");




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<div class="container" id="body" style="padding-top:70px;">
  
    <form class="form-signin" method="post" action="">
      
      <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
      <label for="inputEmail" class="sr-only" >Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email" required autofocus>
      <label for="inputPassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
         <a class="text-center" href="customer_register.php" style="color:blue;"> New? Register here </a> 
    </form>
  
    </div>
    <?php
    if (isset($_POST['login']))
    {
        $c_email=$_POST['email'];
        $c_pass=$_POST['password'];
        
        $sel_c="SELECT * FROM customers WHERE customer_email='$c_email' AND customer_pass=SHA('$c_pass')";
        $run_sel=mysqli_query($con,$sel_c);
        $check_customer=mysqli_num_rows($run_sel);
        if($check_customer==0)
        {
            echo "<script>alert('Incorrect email address or password')</script>";
        }
        
        else
        {
        $ip=getIp();
        $sel_cart="SELECT * FROM cart where ip_add='$ip'";
        $run_cart=mysqli_query($con,$sel_cart);
        $check_cart= mysqli_num_rows($run_cart);
        
        if($check_customer>0 AND $check_cart==0)
        {
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('logged in sucessfully')</script>";
            echo "<script>window.open('customer/my_accounts.php','_self')</script>";
            
            }
        else
        {
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('logged in sucessfully')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
        
        
        
    }
    }
    
    ?>
    
    
    
    
</html>
