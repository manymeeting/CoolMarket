<?php

$curler = new CURLer;
$mutina_url = "http://127.0.0.1/CoolCompany/api/myproducts";

$curler->setURL($mutina_url);
$jsonStr = $curler->fetchData();
$jsonData = json_decode($jsonStr);


require dirname(__FILE__). '/' . '../views/products_list.php';

?>