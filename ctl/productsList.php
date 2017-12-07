<?php

$curler = new CURLer;
$nancy_url = "http://127.0.0.1/CoolCompany/api/myproducts";

$curler->setURL($nancy_url);
$jsonStr = $curler->fetchData();
$jsonData = json_decode($jsonStr);



foreach($jsonData as $data){
   echo $data->name;
  	

}


?>