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

function getMen()
{
    global $con;
    

    $get_men= "Select * FROM `men` ";

    $query_men = mysqli_query($con, $get_men);

    while ($row_men=mysqli_fetch_array($query_men))
    {
        $men_id= $row_men['id'];
        $men_type= $row_men['type'];

        echo "<li><a href='#'> $men_type </a></li>" ;
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
        $women_type= $row_women['type'];

        echo "<li><a href='#'> $women_type </a></li>" ;
    }
}

function getPro()

{
    global $con;
    
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





?>