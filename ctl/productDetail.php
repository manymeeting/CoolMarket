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

// update view history
updateProductHistory($productDetail);


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

function updateProductHistory($productDetail)
{
  $MAX_LEN = 5;

  // update previously viewed products cookie
  $preViewedJSON = $_COOKIE["preViewed"];

  if(strlen($preViewedJSON) == 0)
  {
    $preViewedJSON = "[]";
  }
  $preViewed = json_decode($preViewedJSON, 2);
  $newPreViewed = array();
  // add the current id to the head
  array_push($newPreViewed, $productDetail);

  $len = count($preViewed);
  for ($i=0; $i < $len ; $i++) { 
    $curr_name = $preViewed[$i]["product_name"];
    $curr_market = $newPreViewed[$i]["market_id"];

    if($curr_name != $productDetail["product_name"] || $curr_market != $productDetail["market_id"])
    {
      array_push($newPreViewed, $preViewed[$i]);
      if(count($newPreViewed) == $MAX_LEN)
      {
        break;
      }
    }
  }
  
  $preViewed = $newPreViewed;
  setcookie("preViewed", json_encode($preViewed));

}


?>