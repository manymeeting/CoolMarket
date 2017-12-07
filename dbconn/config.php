<?php
// DEV || PROD
$mode = "DEV";

define("LOCAL_HOST_ADDR","127.0.0.1");
define("DB_NAME","coolcompany");
if($mode == "DEV")
{

	define("DB_USERNAME","root");
	define("DB_PWD","ChenqicHenqi666");
}
else if($mode == "PROD")
{
	define("DB_USERNAME","xxxxx");
	define("DB_PWD","xxxx");
}

?>
