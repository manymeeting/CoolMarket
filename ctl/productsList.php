<?php
session_start();
require dirname(__FILE__). '/' . '../functions/functions.php';

$marketID = $_GET["marketID"];
$productURL = "";
switch ($marketID)
{
case "mutian":
  $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
  break;
case "nancy":
  $productURL = "";
  break;
case "ruifeng":
  $productURL = "";
  break;
case "vencci":
  $productURL = "";
  break;
case "yue":
  $productURL = "";
  break;
default:
  $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
}

$curler = new CURLer;
$curler->setURL($productURL);

$jsonStr = $curler->fetchData();
$jsonData = json_decode($jsonStr);

// pass products data to views
$_SESSION["productsData"] = $jsonData;

$products_list_location = "../views/products_list.php";
header("Location: " . $products_list_location);





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
?>