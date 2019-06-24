<?php
  include("includes/db.php");
  $product_title = "";
  $product_desc = "";
  $product_image = "";
  $product_image2 = "";
  $product_image3 = "";
  $product_price = "";
  
  


  if(isset($_GET['pro_id'])){
    $product_id=$_GET['pro_id'];
    $details_query= "SELECT * FROM `products` WHERE `product_id`='$product_id'";
    $run_details_query = mysqli_query($con,$details_query);
    while($result=mysqli_fetch_array($run_details_query)){
      $product_title = $result['product_title'];
      $product_desc = $result['product_desc'];
      $product_image = $result['product_image'];
      $product_image2 = $result['product_image_2'];
      $product_image3 = $result['product_image_3'];
      $product_price = $result['product_price'];
      $product_cat = $result['product_cat'];
      
    }
    }

    function getPeopleAlsoView(){
      global $con;
      if(isset($_GET['pro_id'])){
        $product_id=$_GET['pro_id'];
        $details_query= "SELECT * FROM `products` WHERE `product_id`='$product_id'";
        $run_details_query = mysqli_query($con,$details_query);
        while($result=mysqli_fetch_array($run_details_query)){
          $product_title = $result['product_title'];
          $product_desc = $result['product_desc'];
          $product_image = $result['product_image'];
          $product_image2 = $result['product_image_2'];
          $product_image3 = $result['product_image_3'];
          $product_price = $result['product_price'];
          $product_cat = $result['product_cat'];
          
        }
        }
      $viewQuery = "SELECT * FROM `products` WHERE `product_cat`='$product_cat' ORDER BY RAND() LIMIT 0,4";
      $runviewQuery = mysqli_query($con,$viewQuery);
      while($resultViewQuery = mysqli_fetch_array($runviewQuery)){
        $id = $resultViewQuery['product_id'];
        $image = $resultViewQuery['product_image'];
        $title = $resultViewQuery['product_title'];
        $price = $resultViewQuery['product_price'];
        echo 
          "
          <div class='col-sm-3'>
          <a href='details.php?pro_id=$id'>
              <img src='admin_area/product_images/$image' width='200' height='200'>
              <p style='text-align: center'>
                $title
              </p>
              <p style='text-align: center'>
                  $price
              </p>
          </a>
            
          </div>
          ";
    
    }
  } 

    

  


?>