<?php

    $error="";
    if(array_key_exists('email',$_POST)){
        print_r($_POST);
        if(!$_POST['email']){
            $error .= "<p>Please Enter an Email ID<br></p>";
        }
        if(!$_POST['password']){
            $error .= "<p>Please Enter a Password<br></p>";
        }
        if(!$error==""){
            $error = "<p>There were errors in your Form\n</p>".$error;
        }else{
            $link = mysqli_connect("localhost","root","","SignUp");
            $query = "SELECT `ID` FROM `cust_info` 
            WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'LIMIT 1";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0){
                $error .= "<p> This id is already signed up </p> <br>";
            }else{
                $var = $_POST['password'];  
                $query = "INSERT INTO `cust_info`(`email`,`pass`) 
                VALUES('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$var)."')";
                $result = mysqli_query($link,$query);
            } 
        }
        
    }


?>




<!DOCTYPE html>
<html>
    <head>
       <title>Sign Up</title> 
    </head>
    <body>
        <div id="error">
          <p><?php echo $error; ?></p>  
        </div>
        <form method="POST">

            <input name="email" type="email" placeholder="abc@xyz.com">
            <input name="password" type="password" placeholder="Enter your password"> 
            <input name="submit" type="submit" value="SignUp">
        </form>

    </body>
</html>