<?php

    session_start();
    $error="";
    if(array_key_exists('email',$_POST)){
       
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
            if($_POST['signup']==1){
               
            	 $query = "SELECT `ID` FROM `cust_info` 
                WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'LIMIT 1";
                $result = mysqli_query($link,$query);
                if(mysqli_num_rows($result) > 0){
                    $error .= "<p> This id is already signed up </p> <br>";
                }
                else{
                    $var = $_POST['password'];  
                    $query = "INSERT INTO `cust_info`(`email`,`pass`) 
                    VALUES('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$var)."')";
                    $result = mysqli_query($link,$query);
                }
            }
            else{
                
                $enteredPass = $_POST['password'];
                $query = "SELECT * FROM `cust_info`
                Where `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'";
                $result = mysqli_query($link,$query);
                $row = mysqli_fetch_array($result);
                if($enteredPass == $row["pass"]){
                    header("Location: index.php");
                }
                else{
                    $error .= "<p> Incorrect Email ID or Password<br></p>";
                }
                

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
            <input name="signup" type="hidden" value="1"> 
            <input name="keeploggedin" type="checkbox" value="1"> 
            <input name="submit" type="submit" value="SignUp">
        </form>
        <p></p>

        
        <form method="POST">
            <input name="email" type="email" placeholder="abc@xyz.com">
            <input name="password" type="password" placeholder="Enter your password"> 
            <input name="signup" type="hidden" value="0"> 
            <input name="keeploggedin" type="checkbox" value="1">
            <input name="submit" type="submit" value="Log in">
        </form>
        
        

    </body>
</html>