<?php
//Class Autoloader
spl_autoload_register(function ($className) {
    $className = strtolower($className);
    $functions = dirname(__FILE__).'/' . "../functions/{$className}.php";
    $forms = dirname(__FILE__).'/' . "../forms/{$className}.php";
    $dbconn = dirname(__FILE__).'/' . "../dbconn/{$className}.php";
    if (file_exists($functions)) {

        require_once($functions);
    } 
    else if (file_exists($forms))
    {
    	require_once($forms);
    }
    else if (file_exists($dbconn))
    {
    	require_once($dbconn);
    }
    else {

        die("The file {$className}.php could not be found.");

    }
});



function combineRatingToProducts($productForm, $productsJsonData)
{

  $allProducts = $productForm->fetchAllProducts();
  foreach ($productsJsonData as &$product) {
    $matchedProduct = $productForm->filterProducts($product["market_id"], $product["product_name"], $allProducts);

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

function getProductsFromURL($curler, $productURL)
{
  $curler->setURL($productURL);

  $jsonStr = $curler->fetchData();
  $jsonData = json_decode($jsonStr, 2);

  return $jsonData;
}

function getProductsViewHistory($marketID)
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
      $productURL = "http://nx168.xyz/prod_list.php";
      break;
    case "ruifeng":
      $productURL = "http://mymilkteaonline.com/top5.php";
      break;
    case "vencci":
      $productURL = "http://worldwith.us/vencci-products/";
      break;
    case "yue":
      $productURL = "http://swiftbooks.net/bookstore/myproducts.php";
      break;
    default:
      $productURL = "http://127.0.0.1/CoolCompany/api/myproducts";
  }
  return $productURL;
}


function array_sort($array, $keys ,$type='asc'){
  $keysvalue = $new_array = array();  
  foreach ($array as $k=>$v){  
    $keysvalue[$k] = $v[$keys];  
  }  
  if($type == 'asc'){  
    asort($keysvalue);  
  }
  else{  
    arsort($keysvalue);  
  }  
  reset($keysvalue);  
  foreach ($keysvalue as $k=>$v){  
    $new_array[$k] = $array[$k];  
  }

  return $new_array;  
}  
//echo '<pre>'; print_r($productDetail); echo '</pre>'; exit();

?>