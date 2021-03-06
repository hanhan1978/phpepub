<?php

spl_autoload_register("loadLibrary");


define("DS", "/");
define("ROOT", dirname(__FILE__)."/../");

require_once ROOT.'vendor/autoload.php';

/*
 * Autoloader for code2epub
 * @param $className  Name of class to be loaded
 */
function loadLibrary($className) {
    $it = new RecursiveDirectoryIterator(dirname(__FILE__));
    $it = new RecursiveIteratorIterator($it);
 
    foreach ($it as $fileinfo) { 
        if ($fileinfo->isFile() && $className.".php" === basename($fileinfo->getPathname()))
            require_once $fileinfo->getPathname();
    }
}
