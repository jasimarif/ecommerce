<?php
include('functions/connection.php');

$user=$_SESSION['email'];
$get_customer="SELECT * FROM customers WHERE customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];
$name=$row_customer['customer_name'];
$email=$row_customer['customer_email'];
$c_id=$row_customer['customer_id'];
$country=$row_customer['customer_country'];
$city=$row_customer['customer_city'];
$contact=$row_customer['customer_contact'];
$address=$row_customer['customer_address'];
  

?>



<div class="container" style="padding-top:70px; margin:0 auto;">
  
    <form  method="post" action="" enctype="multipart/form-data" class="form-signin">
      
      <h1 class="h3 mb-3 font-weight-normal text-center">Update account</h1>
      <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Customer name:</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  value="<?php echo $name;?>" name="c_name"  autofocus>
          </div>
        </div>
        
        
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Country:</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  value="<?php echo $country ?>" name="c_country">
          </div>
        </div>
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>City :</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
          <input type="text"  value="<?php echo $city ?>" name="c_city">
          </div>
        </div>
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Contact:</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
         <input type="text"  value="<?php echo $contact ?>" name="c_contact" >
        </div>
        </div>
         <div class="row"> 
          <div class="col-sm-2 col-md-2"> 
            <p>Customer address:</p>
            
          </div>
          <div class="col-sm-2 col-md-2">
           <input type="text"  value="<?php echo $address ?>" name="c_address" size="50px">
          </div>
        </div>
         
       
      <button class="btn btn-lg btn-primary" type="submit" name="update" style="margin-top:20px;">Update Account</button>
        
            
          
    </form>
  </div>


<?php
    if(isset ($_POST['update']))
    {
    $customer_id=$c_id;
    $c_name=$_POST['c_name'];
   
   
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];

$update_c="UPDATE customers set customer_name='$c_name' customer_country='$c_country', customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_contact' WHERE customer_id='$c_id'";

        $run_update=mysqli_query($con,$update_c);
    echo "<script>alert('Update succesfully')</script>";
    }
    

    
    
    
    ?>


    