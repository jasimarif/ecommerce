<?php

    session_start();
    $error="";
    if(array_key_exists('email',$_POST)){
       

        if(!$_POST['fname']){
            $error .= "<p>Please Enter your name<br></p>";
        }

        if(!$_POST['email']){
            $error .= "<p>Please Enter an Email ID<br></p>";
        }
        if(!$_POST['password']){
            $error .= "<p>Please Enter a Password<br></p>";
        }
        if(!$_POST['cell']){
            $error .= "<p>Please Enter your phone number<br></p>";
        }

        if(!$error==""){
            $error = "<p>There were errors in your Form\n</p>".$error;
        }else{
            $link = mysqli_connect("localhost","root","","SignUp");
            
               
            	 $query = "SELECT `ID` FROM `cust_info` 
                WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'  
                OR `cell_num` = '".mysqli_real_escape_string($link,$_POST['cell'])."'";
                $result = mysqli_query($link,$query);
                if(mysqli_num_rows($result) > 0){
                    $error .= "<p> This Email id or phone number is already signed up </p> <br>";
                }
                else{
                    $var = $_POST['password'];  
                    $query = "INSERT INTO `cust_info`(`fname`,`email`,`pass`,`cell_num`) 
                    VALUES('".mysqli_real_escape_string($link,$_POST['fname'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$var)."','".mysqli_real_escape_string($link,$_POST['cell'])."')";
                    $result = mysqli_query($link,$query);
                    header("Location: index.php");
                }
            
                

            
             
        }
        
    }


?>




<!DOCTYPE html>
<html>
    <head>
       <title>Sign Up</title> 
        <link rel="stylesheet" href="SignUp.css" media="all">
    
    
    </head>
    
    <body>

        
        
        <div class="main_wrapper">
            <div class="child">
            <h1> Create your TiJARAT account</h1>
            <form method="POST" class="formstyle">
                <ul class="formmembers">
                    <div id="error">
                        <p><?php echo $error; ?></p>  
                    </div>
                    
                    <li><label for="fname">Full Name*</label>
                        <input name="fname" type="text" placeholder="Enter your Full Name"></li>
                    <li><label for="email">Email*</label>
                        <input name="email" type="email" placeholder="abc@xyz.com"></li>
                    <li><label for="password">Password*</label>
                        <input name="password" type="password" placeholder="Enter your password"></li>
                    <li><label for="cell">Phone number*</label>
                        <input name="cell" type="text" placeholder="please enter your phone number like 03XXXXXXXXX"></li>
                    <li><input name="signup" type="hidden" value="1"> </li>
                </ul>
                <div id="checkbox">    
                    <input name="keeploggedin" type="checkbox" value="1">    
                    <label  for="keeploggedin" class="rememberme">Remember me</label>
                </div >
                <div id="submit_btn">
                    <input  name="submit" type="submit" value="Sign Up">
                </div>
             </form>
            </div>
        </div>
        

        
        
        
        

    </body>
</html>