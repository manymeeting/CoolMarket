<?php
//Class Autoloader
spl_autoload_register(function ($className) {
    $className = strtolower($className);
    $includes = dirname(__FILE__).'/' . "../includes/{$className}.php";
    $forms = dirname(__FILE__).'/' . "../forms/{$className}.php";
    $dbconn = dirname(__FILE__).'/' . "../dbconn/{$className}.php";
    if (file_exists($includes)) {

        require_once($includes);
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

?>