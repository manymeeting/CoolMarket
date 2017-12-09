<?php
session_start();
require dirname(__FILE__). '/' . '../functions/functions.php';

// initialize forms
$productForm = new ProductForm;

// initialize curl
$curler = new CURLer;
$productURL = "";

$marketID = $_GET["marketID"];

if($marketID==="history")
{
  // get products data from cookie
  $jsonData = getHistoryProducts();
  $jsonData = combineRatingToProducts($productForm, $jsonData);

  $jsonData = sortProducts($jsonData);
  // pass products data to views
  $_SESSION["productsData"] = $jsonData;
  $_SESSION["market_id"] = $marketID;
}
else if(!is_null($marketID))
{
  $productURL = getURLByMarketID($marketID);
  $jsonData = getProductsFromURL($curler, $productURL);

  $jsonData = combineRatingToProducts($productForm, $jsonData);

  $jsonData = sortProducts($jsonData);
  
  // pass products data to views
  $_SESSION["productsData"] = $jsonData;
  $_SESSION["market_id"] = $marketID;

}
else
{
  // get products from all markets
  $jsonData = array();
  $productURLA = getURLByMarketID("mutian");
  $productURLB = getURLByMarketID("nancy");
  $productURLC = getURLByMarketID("ruifeng");
  $productURLD = getURLByMarketID("vencci");
  $productURLE = getURLByMarketID("yue");

  $jsonData = array_merge($jsonData,getProductsFromURL($curler, $productURLA));
  $jsonData = array_merge($jsonData,getProductsFromURL($curler, $productURLB));
  $jsonData = array_merge($jsonData,getProductsFromURL($curler, $productURLC));
  $jsonData = array_merge($jsonData,getProductsFromURL($curler, $productURLD));
  $jsonData = array_merge($jsonData,getProductsFromURL($curler, $productURLE));
    
  $jsonData = combineRatingToProducts($productForm, $jsonData);

  $jsonData = sortProducts($jsonData);

  // pass products data to views
  $_SESSION["productsData"] = $jsonData;
  unset($_SESSION["market_id"]);
}

$products_list_location = "../views/products_list.php";
header("Location: " . $products_list_location);


function sortProducts($jsonData)
{
  $result = $jsonData;
  if(isset($_GET["sortBy"]))
  {
    $sortBy = $_GET["sortBy"];
    if($sortBy === "price")
    {
      $result = array_sort($jsonData, "product_price");
    }
    else if($sortBy === "rating")
    {
      $result = array_sort($jsonData, "rating", "desc");
    }
  }
  return $result;
}

?>