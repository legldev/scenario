<?php

    // Defines Generales //
    define( '_EXEC', 1 );
    define('PATH_BASE', dirname(__DIR__) );
    define( 'DS', DIRECTORY_SEPARATOR );
    define('MODULE_FILE', true);
    define('ADMINISTRATION', true);

    require_once( PATH_BASE .DS.'enginer'.DS.'defines.php' );
    require_once( PATH_BASE .DS.'enginer'.DS.'framework.php' );


    include(PATH_ADMINISTRATOR.DS.'enginer'.DS.'light-html'.DS.'admin-head_content.php');
    include(PATH_ADMINISTRATOR.DS.'enginer'.DS.'light-html'.DS.'admin-script_content.php');


    include (PATH_ADMINISTRATOR .DS.'enginer'.DS.'blockout.php');

    include(PATH_ADMINISTRATOR.DS.'enginer'.DS.'light-html'.DS.'admin-header_content.php');

    if(empty($_GET['section'])) {
        $file = 'main';
    } else {
        $file = $_GET['section']; }

    if(empty($_GET['mod'])) {
        $name = 'error';
    } else {
        $name = $_GET['mod']; }

    $modpath = "components/".$name."/".$file.".php";

    if(file_exists($modpath)) {
        include($modpath);
    }   else {
       include('components/cpanel/main.php');   }

    include ( PATH_ADMINISTRATOR .DS.'enginer'.DS.'light-html'.DS.'admin-footer_content.php' );