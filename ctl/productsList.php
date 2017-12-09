<?php
session_start();
require dirname(__FILE__). '/' . '../functions/functions.php';

// initialize forms
$productForm = new ProductForm;

// initialize curl
$curler = new CURLer;
$productURL = "";

$marketID = $_GET["marketID"];
if(!is_null($marketID))
{
  $productURL = getURLByMarketID($marketID);
  $jsonData = getProductsFromURL($curler, $productURL);

  $jsonData = combineRatingToProducts($productForm, $jsonData);

  // pass products data to views
  $_SESSION["productsData"] = $jsonData;

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
  // pass products data to views
  $_SESSION["productsData"] = $jsonData;
}

$products_list_location = "../views/products_list.php";
header("Location: " . $products_list_location);



function combineRatingToProducts($productForm, $productsJsonData)
{
  $allProducts = $productForm->fetchAllProducts();
  foreach ($productsJsonData as &$product) {
    $matchedProduct = filterProducts($product["market_id"], $product["product_name"], $allProducts);
    if($matchedProduct)
    {
      $product["rating"] = $matchedProduct["rating"];
    }
    else
    {
      $product["rating"] = 0;
    }
  }
  return $productsJsonData;
}

function filterProducts($marketID, $prodctName, $allProducts)
{
  $result = array();
  foreach ($allProducts as $product) {
    if($product["name"] === $prodctName && $product["market_id"] === $marketID)
    {
      $result = $product;
      return $result;
    }
  }
  return false;
}

function getProductsFromURL($curler, $productURL)
{
  $curler->setURL($productURL);

  $jsonStr = $curler->fetchData();
  $jsonData = json_decode($jsonStr, 2);

  return $jsonData;
}


function getRecentViewedProducts($marketID)
{
	$preViewedJSON = $_COOKIE["preViewed"];
	if(strlen($preViewedJSON) == 0)
	{
	  $preViewedJSON = "[]";
	}
	$preViewed = json_decode($preViewedJSON);


	$preductForm = new ProductForm;

	// compare market id and prod id 
}	



function getURLByMarketID($marketID)
{
  $productURL = "";
  switch ($marketID)
  {
    case "mutian":
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
      break;
    case "nancy":
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
      break;
    case "ruifeng":
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
      break;
    case "vencci":
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
      break;
    case "yue":
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
      break;
    default:
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
  }
  return $productURL;
}
?>