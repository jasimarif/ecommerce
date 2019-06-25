<!doctype html>
<?php

session_start();
include("functions/functions.php");  
include("includes/include_body.php");
?>



   
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