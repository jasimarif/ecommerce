<?php

$qty = $_GET['value'];
$product_price = $_GET['product_price'];
$price = (int)$qty * (int)$product_price;
echo $product_price;

 

?>