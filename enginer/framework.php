<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    defines.php | v 1.0 | date: 02/07/2015
------------------------------------------------------------------------------------------
    Light Enginer Framework
----------------------------------------------------------------------------------------*/
    // General Defines
    defined('_EXEC') or die('Acceso Denegado');
    date_default_timezone_set('America/Caracas');
//----------------------------------------------------------------------------------------
    // Installation System
    if(!file_exists(PATH_CONFIGURATION.DS.'config'.PHP) || (filesize(PATH_CONFIGURATION.DS.'config.php') < 10) || file_exists(PATH_INSTALLATION.DS.'index.php')) {
	if(file_exists(PATH_INSTALLATION.DS.'index'.PHP)) { header('location:'.PATH_INSTALLATION.DS.'index'.PHP); exit(); } else { echo 'Error al cargar la configuración'; exit(); }}
//----------------------------------------------------------------------------------------
    // Import Libraries and more
    require_once(PATH_ENGINER.DS.'import'.PHP);
    // PHP Compatibily Mode
    require_once(PATH_UTILITIES.DS.'compat'.PHP);
    // Global Config
    require_once(PATH_CONFIGURATION.DS.'config'.PHP);
    // Language Pack
    if(isset($_COOKIE['lang'])) { $lang_def = $_COOKIE['lang']; } else { $lang_def = $lang; }
    if(file_exists(PATH_LANG.DS.$lang_def.PHP)) { require_once(PATH_LANG.DS.$lang_def.PHP); } else { include(PATH_HTML.DS.'global-offline_content'.PHP); die(); }

    $CONFIG = new Config();

    // Web Status
    if (@$CONFIG->offline === 1) { include(PATH_HTML.DS.'global-offline_content'.PHP); die(); }

    // Error System
    if (@$CONFIG->error_reporting === 0) { error_reporting(0); }
    else if (@$CONFIG->error_reporting > 0) { error_reporting($CONFIG->error_reporting);
    ini_set('display_errors', 0); }

    define('eDEBUG', $CONFIG->debug);
    unset($CONFIG);

    if (eDEBUG) { eimport('light-error.profiler');
    $_PROFILER =& eProfiler::getInstance('Application'); }

    // IAF
    include(PATH_ENGINER.DS.'iaf'.PHP);