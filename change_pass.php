<?php
include('functions/connection.php');


$user=$_SESSION['email'];
$get_customer="SELECT * FROM customers WHERE customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];



?>
<div class="container" style="padding-top:70px; margin:0 auto;">
  
    <form  method="post" action="" class="form-signin">
      
      <h1 class="h3 mb-3 font-weight-normal text-center">Change Password</h1>
      <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
<<<<<<< HEAD
            <p>Old Password:</p>
=======
            <p>Current Password:</p>
>>>>>>> DetailsPage
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  name="old_pass"  autofocus>
          </div>
        </div>
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Enter Password :</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  value="" name="new_pass"  autofocus>
          </div>
        </div>
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Enter Password Again:</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  value="" name="new_pass_again"  autofocus>
          </div>
        </div>
         <button class="btn btn-lg btn-primary" type="submit" name="update" style="margin-top:20px;">Update Account</button>
    </form>
    
</div>

<?php

if(isset($_POST['update']))
{
$ip=getIp();
<<<<<<< HEAD
=======
$user=$_SESSION['email'];
>>>>>>> DetailsPage
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];    
$check_pass= "SELECT * FROM customers WHERE customer_pass=SHA('$old_pass')";
$run_pass=mysqli_query($con,$check_pass);
$row_customer=mysqli_fetch_array($run_pass);
$customer_email=$row_customer['customer_email'];    
$match_pass=mysqli_num_rows($run_pass);
<<<<<<< HEAD
if(($match_pass>0) AND ($_POST['new_pass'])==($_POST['new_pass_again']))
{
    $update_query= "UPDATE customers set customer_pass=SHA('$new_pass') WHERE customer_ip='$ip' AND customer_email='$customer_email'";
=======
    
if($match_pass==0)
{
    echo "<script>alert('Enter correct current password')</script>";
}
    
if($_POST['new_pass']!=($_POST['new_pass_again']))
{
    echo "<script>alert('Password donot match')</script>";
}
    
if(($match_pass>0) AND ($_POST['new_pass'])==($_POST['new_pass_again']))
{
    $update_query= "UPDATE customers set customer_pass=SHA('$new_pass') WHERE customer_ip='$ip' AND customer_email='$user'";
>>>>>>> DetailsPage
    if($run_update=mysqli_query($con,$update_query))
    {    
    echo "<script>alert('Password Changed')</script>";}
}
    
else
{
     echo "<script>alert('Password not Changed')</script>";
}
    
<<<<<<< HEAD
    
    
    
    
=======
>>>>>>> DetailsPage
}

?>