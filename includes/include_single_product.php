<?php


echo "
           
        <div class='col-sm-4 my-4 singleProduct' onmouseover='border()'>    
        <div class='card' style='width: 18rem;'>
        <a href='details.php?pro_id=$pro_id'><img class='card-img-top' src='admin_area/product_images/$pro_image' alt='$pro_title image'  width='180' height='200'></a>
        <div class='card-body'>
          <h5 class='card-title'>$pro_title</h5>
        </div>
        <div class='card-body text-center' style='margin-top:-45px; color:orange; font-size:20px;'>
          $pro_price
        </div>
        
        <div class='card-body' style='margin-top:-35px'>
          <a href='all_products.php?add_cart=$pro_id' class='card-link'> <button class='btn btn-sm mx-4 btn-primary' style:'float:right'> Add to cart </button></a>
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

?>