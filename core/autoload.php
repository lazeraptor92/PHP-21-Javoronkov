<?php

function autoloader($className)
{
    $className =  str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $pathToClassFile = $className . '.class.php';
    $pathToInterfaceFile = $className . '.interface.php';

    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
    } elseif (file_exists($pathToInterfaceFile)) {
        include "$pathToInterfaceFile";
    }
}

function coreAutoloader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $pathToClassFile = 'core' . DIRECTORY_SEPARATOR . $className . '.class.php';
    $pathToInterfaceFile = 'core' . DIRECTORY_SEPARATOR . $className . '.interface.php';
    
//Если файл существует, то подгружаем
    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
    } elseif (file_exists($pathToInterfaceFile)) {
        include "$pathToInterfaceFile";
    }
}

spl_autoload_register('coreAutoloader');
spl_autoload_register('autoloader');