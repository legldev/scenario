<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    defines.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');
    $parts = explode(DS,PATH_BASE);

    // Root Directory
    define('PATH_ROOT',implode(DS, $parts));
    define('PATH_SITE',PATH_ROOT);
    define('PATH_ADMINISTRATOR',PATH_ROOT.DS.'admin');
    define('PATH_COMPONENTS',PATH_ROOT.DS.'components');
    define('PATH_ENGINER',PATH_ROOT.DS.'enginer');
    define('PATH_CONFIGURATION',PATH_ROOT.DS.'enginer');
    define('PATH_MEDIA',PATH_BASE.DS.'media');
    define('PATH_INSTALLATION',PATH_ROOT.DS.'installation');

    // Administration Directory
    define('PATH_ADMIN_ENGINER',PATH_ADMINISTRATOR.DS.'enginer');
        define('PATH_ADMIN_FUNCTIONS',PATH_ADMIN_ENGINER.DS.'light-functions');
        define('PATH_ADMIN_HTML',PATH_ADMIN_ENGINER.DS.'light-html');
        define('PATH_ADMIN_JS',PATH_ADMIN_ENGINER.DS.'light-js');

    define('PATH_ADMIN_COMPONENTS',PATH_ADMINISTRATOR.DS.'components');
        define('PATH_CPANEL',PATH_ADMIN_COMPONENTS.DS.'components');
    define('PATH_ADMIN_MEDIA',PATH_ADMINISTRATOR.DS.'media');

    // Enginer Directory
    define('PATH_LANG',PATH_ENGINER.DS.'lang');
    define('PATH_DB',PATH_ENGINER.DS.'light-database');
    define('PATH_ERROR',PATH_ENGINER.DS.'light-error');
    define('PATH_FUNC',PATH_ENGINER.DS.'light-functions');
    define('PATH_HTML',PATH_ENGINER.DS.'light-html');
    define('PATH_JS',PATH_ENGINER.DS.DS.'light-js');
    define('PATH_LIBS',PATH_ENGINER.DS.'light-libraries');
    define('PATH_PLUGINS',PATH_ENGINER.DS.'light-plugins');
    define('PATH_UTILITIES',PATH_ENGINER.DS.'light-utilities');
    define('PATH_LOGS',PATH_ENGINER.DS.'logs');
    define('PATH_TMP',PATH_ENGINER.DS.'tmp');

    // Files Extensions
    define('PHP','.php');