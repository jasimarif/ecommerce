<?php

$con=mysqli_connect("localhost","root","","ecommerce");

//getting the categories

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
           
            
            <div id=single_product> 
            <a href='details.php?pro_id=$pro_id' >  <p>  $pro_title  </p> </a>
            <a href='details.php?pro_id=$pro_id'> <img src='admin_area/product_images/$pro_image' width='180' height='200' /> </a>
            <p> PKR $pro_price </p>
            <a href='index.php?pro_id=$pro_id'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button> </a>     
                
            </div>
        
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
           
            
            <div id=single_product> 
            <a href='details.php?pro_id=$pro_id' >  <p>  $pro_title  </p> </a>
            <a href='details.php?pro_id=$pro_id'> <img src='admin_area/product_images/$pro_image' width='180' height='200' /> </a>
            <p> PKR $pro_price </p>
            <a href='index.php?pro_id=$pro_id'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button> </a>     
                
            </div>
        
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
           
            
            <div id='single_product'> 
            <a href='details.php?pro_id=$pro_id' >  <p>  $pro_title  </p> </a>
            <a href='details.php?pro_id=$pro_id'> <img src='admin_area/product_images/$pro_image' width='180' height='200' /> </a>
            <p> PKR $pro_price </p>
            <a href='index.php?pro_id=$pro_id'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button> </a>     
                
            </div>
        
        ";
    }
        
        }
}




?>