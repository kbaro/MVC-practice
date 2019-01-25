<?php

define("BP",__DIR__ . DIRECTORY_SEPARATOR);
//echo BP;
error_reporting(E_ALL);
ini_set("display_errors",1);

$t = implode(PATH_SEPARATOR,[
    BP . "app" . DIRECTORY_SEPARATOR . "model",
    BP . "app" . DIRECTORY_SEPARATOR . "controller"
]
);

//echo "<pre>";
//var_dump($t);
//echo "</pre>";

set_include_path($t);

spl_autoload_register(function($class)
{
    $path = strtr($class,"\\",DIRECTORY_SEPARATOR) . ".php";
    return include $path;
}
);
App::start();