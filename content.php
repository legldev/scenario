<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    content.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    define('_EXEC', 1);
    define('PATH_BASE', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);
    define('MODULE_FILE', true);

    require_once(PATH_BASE.DS.'enginer'.DS.'defines.php');
    require_once(PATH_ENGINER.DS.'framework'.PHP);

    include(PATH_HTML.DS.'global-head_content'.PHP);
    include(PATH_HTML.DS.'global-script_content'.PHP);
    include(PATH_HTML.DS.'global-header_content'.PHP);

    if(empty($_GET['section'])) { $file = 'main'; } else { $file = $_GET['section']; }

    $name = $_GET['mod'];
    $modpath = PATH_COMPONENTS.DS.$name.DS.$file.PHP;

    if(file_exists($modpath)) { include($modpath); }
    else if($_GET['sa']=="Buscar") { include (PATH_COMPONENTS.DS.'search'.DS.'main'.PHP); }
    else { include (PATH_COMPONENTS.DS.'error'.DS.'404'.PHP); }

    include(PATH_HTML.DS.'global-footer_content'.PHP);