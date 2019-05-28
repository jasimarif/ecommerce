<?php
    if(array_key_exists("email",$_POST)){
        print_r($_POST);
        $error = "";    
        if(!$_POST['email']){
            $error .= "<p>Please Enter an Email Address</p><br>";
        }
        if(!$_POST['password']){
            $error .= "<p>Please enter your password</p><br>";
        }else{
            $link = mysqli_connect("localhost","root","","SignUp");
            $query = "SELECT * FROM `cust_info` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'";
            $result = mysqli_query($link,$query);
            $row = mysqli_fetch_array($result);
            if($_POST['password']===$row['pass']){
                header("Location: index.php");
            }else{
                $error = "<p>Your ID or password is wrong</p><br>";
            }
        }
    }


?>
<!DOCTYPE html>
<html>
    <head>
       <title>Sign Up</title> 
        <link rel="stylesheet" href="login.css" media="all">
    
    
    </head>
    
    <body>
        <div class="main_wrapper">
            <div class="child">
            <h1> Log in to your TiJARAT account</h1>
            <form method="POST" class="formstyle">
                <ul class="formmembers">
                    <div id="error">
                        <p><?php echo $error;?></p>  
                    </div>
                    
                     <li><label for="email">Email*</label>
                        <input name="email" type="email" placeholder="abc@xyz.com"></li>
                    <li><label for="password">Password*</label>
                        <input name="password" type="password" placeholder="Enter your password"></li>
                </ul>
                <div id="checkbox">    
                    <input name="keeploggedin" type="checkbox" value="1">    
                    <label  for="keeploggedin" class="rememberme">Remember me</label>
                </div >
                <div id="submit_btn">
                    <input  name="submit" type="submit" value="Log in">
                </div>
             </form>
            </div>
        </div>
        

        
        
        
        

    </body>
</html>