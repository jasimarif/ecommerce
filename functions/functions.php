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

?>