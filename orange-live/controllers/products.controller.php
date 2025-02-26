<?php
require_once './models/product.php';

$product =new Product();
$products=$product->getproducts();



require_once './view/products/show.php';
?>