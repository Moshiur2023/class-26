<?php
require_once 'vendor/autoload.php';
use App\classes\student;
use App\classes\Product;

$product = new Product();

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $student = new Student();
        $students = $student->allStudent();
        include 'pages/home.php';
    }
    elseif($_GET['page']=='product'){
        $products = $product->allProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['page'] == 'details'){
        $productID = $_GET['id'];
        $product = $product->productDetails($productID);
        include 'pages/product-details.php';
    }
}

?>
