<?php
function autoload ($class_name)
{
    $class_name=str_replace('\\','/',$class_name);
    if (file_exists("./".$class_name.".php")) {

        include_once($class_name.".php");
    }
    else{

        header("HTTP/1.0 404 Not Found");
        echo "К сожалению такой страницы не существует. [".PATH_SITE.$class_name.".php ]";
        exit;
    }
}
spl_autoload_register('autoload');


define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']); 
