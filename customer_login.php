<!doctype html>
<?php
include("functions/functions.php");  
session_start();


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
     

<div class="container col-sm-3" id="body" style="padding-top:70px;">
  
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

    </div>      
      
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
        if($check_customer>0)
        {
            $_SESSION['email']=$c_email;
            echo "<script>window.open('index.php','_self')</script>";
        }
        
        
        </span>


         </div> 

   
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

      </div>      
        
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
        if($check_customer>0)
        {
            $_SESSION['email']=$c_email;
            echo "<script>window.open('index.php','_self')</script>";
        }
        
        
        
        
    }
    
    
    ?>
    
        
    }
    
    
    ?>
    
        
    <?php
   include("includes/MainFooter.php");
   ?> 
      
      
      
      
      
      
      
  
    
    </body>
</html>