<?php
session_start();
require dirname(__FILE__). '/' . '../functions/functions.php';

$marketID = $_GET["marketID"];
$productName = $_GET["productName"];

// get all products data and product detail from session
if(!isset($_SESSION["productsData"]))
{
	// go back to load product list
	returnToProductList();

}
$productsData = $_SESSION["productsData"];

$productDetail = findProductDetail($marketID, $productName, $productsData);
if(!$productDetail)
{
	returnToProductList();
}


// get review for this product
$reviewForm = new ReviewForm;
$reviewsData = $reviewForm->getReviewsAndMembers($productName, $marketID);
if(is_null($reviewsData))
{
	$reviewsData = array();
}
$productDetail["reviews"] = $reviewsData;

// pass products data to views
$_SESSION["productDetail"] = $productDetail;

$product_details_location = "../views/product_details.php";
header("Location: " . $product_details_location);




function findProductDetail($marketID, $productName, $allProducts)
{
  $result = array();
  foreach ($allProducts as $product) {
    if($product["product_name"] === $productName && $product["market_id"] === $marketID)
    {
      $result = $product;
      return $result;
    }
  }
  return false;
}

function returnToProductList()
{
	// go back to load product list
	$products_list_location = "productsList.php";
	header("Location: " . $products_list_location);	
}
?>