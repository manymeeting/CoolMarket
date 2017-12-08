<?php

require dirname(__FILE__). '/' . '../functions/functions.php';

$curler = new CURLer;
$mutina_url = "http://127.0.0.1/CoolCompany/api/myproducts";

$curler->setURL($mutina_url);
$jsonStr = $curler->fetchData();
$jsonData = json_decode($jsonStr);

// Set session variables
$_SESSION["productsData"] = $jsonData;

$products_list_location = "../views/products_list.php";
header("Location: " . $products_list_location);
?>