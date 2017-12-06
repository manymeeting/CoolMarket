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

?>