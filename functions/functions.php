<?php

$con=mysqli_connect("localhost","root","","ecommerce");


// getting the Ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
//displaying cart
function getCart()
{
      $total=0;
            global $con;
            $ip=getIp();
            $sel_price= "SELECT * FROM cart where ip_add='$ip'";
            $run_price=mysqli_query($con, $sel_price);
            while($p_price=mysqli_fetch_array($run_price))
            {
                $pro_id=$p_price['p_id'];
                $pro_query= "SELECT * FROM products WHERE product_id='$pro_id'";
                $run_query=mysqli_query($con,$pro_query);
                while($pp_price=mysqli_fetch_array($run_query))
                {
                    $product_price=array($pp_price['product_price']);
                    $product_title=$pp_price['product_title'];
                    $product_image=$pp_price['product_image'];
                    $single_price=$pp_price['product_price'];
                    $sum=array_sum($product_price);
                    $total+=$sum;
                    
                    
echo " 
        </tr>
                 
                 <tr>
                    <td> <input type='checkbox' name='remove[]' value='$pro_id;'> </td>
                    <td > <b> $product_title </b><br>   
                        <img src='admin_area/product_images/$product_image' width='100' height='100'/>                      
                     </td>
                    <td> <input type='text' size='4' name='qty'> </td>
                  
                    <td> $single_price</td>
                 
                 
                 </tr>"   ;
            
                 
                } }
    
    echo "
             <tr> 
                 
                 <td colspan='3'> </td>
                <td> <b> Total: $total </b></td>
                 </tr>
    
            ";
    
                               

}



//adding to cart
function cart()
{
    global $con;
    if(!isset($_SESSION['email']))
    {
        if (isset($_GET['add_cart']))
    {
        $ip=getIp();
        $pro_id = $_GET['add_cart'];
        $check_pro= "SELECT * FROM cart WHERE ip_add= '$ip' AND p_id= '$pro_id' ";
        $run_check= mysqli_query($con, $check_pro);
        if(mysqli_num_rows($run_check)>0)
        {
            echo "<script>alert('Already added')</script>";
        }
        else
        {
            $insert_pro= "INSERT INTO `cart` (p_id,ip_add) values ('$pro_id','$ip')";
            $run_pro= mysqli_query($con,$insert_pro);
            echo "<script>alert('Product added')</script>";
            echo "<script> window.open('index.php','_self') </script>";
            
        }
       
    }}
     elseif(isset($_SESSION['email']))
         if (isset($_GET['add_cart']))
        {
        $email=$_SESSION['email'];
        $ip=getIp();
        $pro_id = $_GET['add_cart'];
        $check_pro= "SELECT * FROM cart WHERE ip_add= '$ip' AND p_id= '$pro_id' ";
        $run_check= mysqli_query($con, $check_pro);
        if(mysqli_num_rows($run_check)>0)
        {
            echo "<script>alert('Already added')</script>";
        }
        else
        {
            $insert_pro= "INSERT INTO `cart` (p_id,ip_add,customer_email) values ('$pro_id','$ip','$email')";
            $run_pro= mysqli_query($con,$insert_pro);
            echo "<script>alert('Product added')</script>";
            echo "<script> window.open('index.php','_self') </script>";
            
        } 
            
        }
    
    
    
}

//displaying all products in the product page
function all_pro_cart()
{
    global $con;
    if(!isset($_SESSION['email'])) 
    {   
        if (isset($_GET['add_cart']))
    {
        $ip=getIp();
        $pro_id = $_GET['add_cart'];
        $check_pro= "SELECT * FROM cart WHERE ip_add= '$ip' AND p_id= '$pro_id' ";
        $run_check= mysqli_query($con, $check_pro);
        if(mysqli_num_rows($run_check)>0)
        {
            echo "<script>alert('Already added')</script>";
        }
        else
        {
            $insert_pro= "INSERT INTO `cart` (p_id,ip_add) values ('$pro_id','$ip')";
            $run_pro= mysqli_query($con,$insert_pro);
            echo "<script>alert('Product added')</script>";
            echo "<script> window.open('all_products.php','_self') </script>";
        }
    }
    }
    elseif(isset($_SESSION['email']))
         if (isset($_GET['add_cart']))
        {
        $email=$_SESSION['email'];
        $ip=getIp();
        $pro_id = $_GET['add_cart'];
        $check_pro= "SELECT * FROM cart WHERE ip_add= '$ip' AND p_id= '$pro_id' ";
        $run_check= mysqli_query($con, $check_pro);
        if(mysqli_num_rows($run_check)>0)
        {
            echo "<script>alert('Already added')</script>";
        }
        else
        {
            $insert_pro= "INSERT INTO `cart` (p_id,ip_add,customer_email) values ('$pro_id','$ip','$email')";
            $run_pro= mysqli_query($con,$insert_pro);
            echo "<script>alert('Product added')</script>";
            echo "<script> window.open('index.php','_self') </script>";
            
        } 
}
}


//counting the total items
function totalItems()
{
    if(!isset($_SESSION['email'])) 
    { 
        if (isset($_GET['add_cart']))
    {
        global $con;
        $email=$_SESSION['email'];
        $ip= getIp();
        $get_items= "SELECT * FROM cart WHERE ip_add='$ip'";
        $run_items=mysqli_query($con,$get_items);
        $count_items= mysqli_num_rows($run_items);
        
    }
    else
    {
        global $con;
        $ip= getIp();
        $get_items= "SELECT * FROM cart WHERE ip_add='$ip'";
        $run_items=mysqli_query($con,$get_items);
        $count_items= mysqli_num_rows($run_items);
    }
    
    echo $count_items;
    
    }
    elseif(isset($_SESSION['email']))
    {
         if (isset($_GET['add_cart']))
         {
        global $con;
        $email=$_SESSION['email'];
        $ip= getIp();
        $get_items= "SELECT * FROM cart WHERE ip_add='$ip' AND customer_email='$email'";
        $run_items=mysqli_query($con,$get_items);
        $count_items= mysqli_num_rows($run_items);
        
    }
    else
    {
        global $con;
        $email=$_SESSION['email'];
        $ip= getIp();
        $get_items= "SELECT * FROM cart WHERE ip_add='$ip' AND customer_email='$email'";
        $run_items=mysqli_query($con,$get_items);
        $count_items= mysqli_num_rows($run_items);
    }    
     echo $count_items;        
             
}}

//getting the total price

function totalPrice()
{
    $total=0;
    global $con;
    $ip=getIp();
     if(!isset($_SESSION['email'])) 
    { 
        if (isset($_GET['add_cart']))
    {
    $sel_price= "SELECT * FROM cart where ip_add='$ip'";
    $run_price=mysqli_query($con, $sel_price);
    while($p_price=mysqli_fetch_array($run_price))
    {
        $pro_id=$p_price['p_id'];
        $pro_query= "SELECT * FROM products WHERE product_id='$pro_id'";
        $run_query=mysqli_query($con,$pro_query);
        while($pp_price=mysqli_fetch_array($run_query))
        {
            $product_price=array($pp_price['product_price']);
            $sum=array_sum($product_price);
            $total+=$sum;
            
        }
            
    }
    echo "PKR $total ";
        }}
    
    
     elseif(isset($_SESSION['email'])) 
    { 
        if (isset($_GET['add_cart']))
    {
     $email=$_SESSION['email'];        
    $sel_price= "SELECT * FROM cart where ip_add='$ip' AND customer_email='$email'";
    $run_price=mysqli_query($con, $sel_price);
    while($p_price=mysqli_fetch_array($run_price))
    {
        $pro_id=$p_price['p_id'];
        $pro_query= "SELECT * FROM products WHERE product_id='$pro_id'";
        $run_query=mysqli_query($con,$pro_query);
        while($pp_price=mysqli_fetch_array($run_query))
        {
            $product_price=array($pp_price['product_price']);
            $sum=array_sum($product_price);
            $total+=$sum;
            
        }
            
    }
    echo "PKR $total ";
        }}
         
}


function getCat()
{
    global $con;

    $get_cats= "Select * FROM `categories`";

    $run_cat = mysqli_query($con, $get_cats);

    while ($row_cat=mysqli_fetch_array($run_cat))
    {
        $cat_id= $row_cat['cat_id'];
        $cat_title= $row_cat['cat_title'];

        echo "<li><a href='#'> $cat_title </a></li>" ;
    }
}



function getTypes()
{
    global $con;
    

    $get_type= "Select * FROM `types` ";

    $query_type = mysqli_query($con, $get_type);

    while ($row_type=mysqli_fetch_array($query_type))
    {
        $type_id= $row_type['type_id'];
        $type_title= $row_type['type_title'];

        echo "<li><a href='index.php?type_id=$type_title'> $type_title </a></li>" ;
    }
}

function getwomen()
{
    global $con;
    

    $get_women= "Select * FROM `women` ";

    $query_women = mysqli_query($con, $get_women);

    while ($row_women=mysqli_fetch_array($query_women))
    {
        $women_id= $row_women['id'];
        $women_title= $row_women['type'];

        echo "<li><a href='index.php?women_id=$women_title'> $women_title </a></li>" ;
    }
}

function getPro()

{
    global $con;
    if (!isset ($_GET['type_id']))
        if(!isset($_GET['women_id']))
        {
    
    $get_pro= "SELECT * FROM products order by 'product_id' LIMIT 0,10";
    $run_pro= mysqli_query($con, $get_pro);
    while($row_pro=mysqli_fetch_array($run_pro))
    {
        $pro_id=$row_pro['product_id'];
        $pro_cat=$row_pro['product_cat'];
        $pro_type=$row_pro['product_type'];
        $pro_title=$row_pro['product_title'];
        $pro_price=$row_pro['product_price'];
        $pro_image=$row_pro['product_image'];

        echo "
           
        <div class='col-sm-3 my-2 singleProduct' onmouseover='border()'>    
        <div class='card' style='width: 18rem;'>
        <a href='details.php?pro_id=$pro_id'><img class='card-img-top' src='admin_area/product_images/$pro_image' alt='$pro_title image'  width='180' height='200'></a>
        <div class='card-body'>
          <h5 class='card-title'>$pro_title</h5>
        </div>
        <div class='card-body text-center' style='margin-top:-45px; color:orange; font-size:20px;'>
          $pro_price
        </div>
        
        <div class='card-body' style='margin-top:-35px'>
          <a href='index.php?add_cart=$pro_id' class='card-link'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button></a>
        </div>
      </div>
      </div>

      <script>
        function border(){
            var selector_box = Document.querySelector('.singleProduct');
            selector_box.classList.add('border-image');
        }
      </script>
        
        ";
    }
        }
}

function getMenPro()

{
    global $con;
    $query= "SELECT * FROM products" ;
    $run_query=mysqli_query($con, $query);
    $row_query=mysqli_fetch_array($run_query);
    
        if (isset ($_GET['type_id'])) 
          
        {
        
        $men_title=$_GET['type_id'];
    $get_men_pro= "SELECT * FROM products WHERE product_cat= '1' AND product_type= '$men_title'";
    $run_men_pro= mysqli_query($con, $get_men_pro);
    while($row_men_pro=mysqli_fetch_array($run_men_pro))
    {
        $pro_id=$row_men_pro['product_id'];
        $pro_cat=$row_men_pro['product_cat'];
        $pro_type=$row_men_pro['product_type'];
        $pro_title=$row_men_pro['product_title'];
        $pro_price=$row_men_pro['product_price'];
       
        $pro_image=$row_men_pro['product_image'];

        echo "
           
        <div class='col-sm-3 my-2 singleProduct' onmouseover='border()'>    
        <div class='card' style='width: 18rem;'>
        <a href='details.php?pro_id=$pro_id'><img class='card-img-top' src='admin_area/product_images/$pro_image' alt='$pro_title image'  width='180' height='200'></a>
        <div class='card-body'>
          <h5 class='card-title'>$pro_title</h5>
        </div>
        <div class='card-body text-center' style='margin-top:-45px; color:orange; font-size:20px;'>
          $pro_price
        </div>
        
        <div class='card-body' style='margin-top:-35px'>
          <a href='index.php?add_cart=$pro_id' class='card-link'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button></a>
        </div>
      </div>
      </div>

      <script>
        function border(){
            var selector_box = Document.querySelector('.singleProduct');
            selector_box.classList.add('border-image');
        }
      </script>
           
        
        ";
    }
        
        }
}
function getWomenPro()

{
    global $con;
    
    if (isset ($_GET['women_id']))  
        
        {
        
        $women_title=$_GET['women_id'];
    $get_women_pro= "SELECT * FROM products WHERE product_cat= '2' AND product_type='$women_title'";
    $run_women_pro= mysqli_query($con, $get_women_pro);
    while($row_women_pro=mysqli_fetch_array($run_women_pro))
    {
        $pro_id=$row_women_pro['product_id'];
        $pro_cat=$row_women_pro['product_cat'];
        $pro_type=$row_women_pro['product_type'];
        $pro_title=$row_women_pro['product_title'];
        $pro_price=$row_women_pro['product_price'];
       
        $pro_image=$row_women_pro['product_image'];

        echo "
           
            
        <div class='col-lg-3 my-2 singleProduct' onmouseover='border()'>    
        <div class='card' style='width: 18rem;'>
        <a href='details.php?pro_id=$pro_id'><img class='card-img-top' src='admin_area/product_images/$pro_image' alt='$pro_title image'  width='180' height='200'></a>
        <div class='card-body'>
          <h5 class='card-title'>$pro_title</h5>
        </div>
        <div class='card-body text-center' style='margin-top:-45px; color:orange; font-size:20px;'>
          $pro_price
        </div>
        
        <div class='card-body' style='margin-top:-35px'>
          <a href='index.php?add_cart=$pro_id' class='card-link'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button></a>
        </div>
      </div>
      </div>

      <script>
        function border(){
            var selector_box = Document.querySelector('.singleProduct');
            selector_box.classList.add('border-image');
        }
      </script>     
        
        ";
    }
        
        }
}




?>