<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    import.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');

    if (!class_exists('eLoader')) { require_once( PATH_ENGINER.DS.'loader'.PHP); }

    eLoader::import('light-libraries.object');
    eLoader::import('light-libraries.request');
    eLoader::import('light-libraries.factory');
    eLoader::import('light-error.error');
    eLoader::import('light-error.exception');
    eLoader::import('light-utilities.arrayhelper');

    eLoader::register('eText' , dirname(__FILE__).DS.'light-libraries'.DS.'methods'.PHP);
    eLoader::register('eRoute', dirname(__FILE__).DS.'light-libraries'.DS.'methods'.PHP);